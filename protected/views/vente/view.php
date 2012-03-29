<?php
$this->breadcrumbs=array(
	'Ventes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Les ventes', 'url'=>array('vente/admin')),
	array('label'=>'Nouvelle vente', 'url'=>array('vente/create')),
);
?>

<div class="page-header">
<h2>Consulter une Vente</h2>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
                   'lable'=>'id_article',
                   'value'=>$model->idArticle->Designation,
                 ),
		'id_client',
		'Date',
		'TotalHT',
		'TotalTVA',
		'Pvente',
		'Paye',
		'Reste',
		,
		array(
                   'lable'=>'id_magasin',
                   'value'=>$model->idMagasin->Nom,
                 ),
		array(
                   'lable'=>'id_utilisateur',
                   'value'=>$model->idUtilisateur->Nom.' '.$model->idUtilisateur->Prenom,
                 ),
	),
)); ?>

<script>
document.getElementById("section").innerHTML ="Ventes";
</script>