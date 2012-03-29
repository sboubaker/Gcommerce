<?php
$this->breadcrumbs=array(
	'Achats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Les achats', 'url'=>array('achat/admin')),
	array('label'=>'Nouvelle achat', 'url'=>array('achat/create')),
);
?>

<div class="page-header">
<h2>Cinsulter une achat</h2>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
                   'lable'=>'id_article',
                   'value'=>$model->idArticle->Designation,
                 ),
		'Quantite',
		'PuaHT',
		'Remise',
		'Tva',
		'Paye',
		'Reste',
		
		array(
                   'lable'=>'id_fournisseur',
                   'value'=>$model->idFournisseur->Contact,
                 ),
		array(
                   'lable'=>'id_utilisateur',
                   'value'=>$model->idUtilisateur->Nom.' '.$model->idUtilisateur->Prenom,
                 ),
		'Datec',
		'Datem',
	),
)); ?>
<script>
document.getElementById("section").innerHTML ="Achats";
</script>
