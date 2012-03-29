<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Les Client', 'url'=>array('client/admin')),
	array('label'=>'Nouveau Client', 'url'=>array('client/create')),
	array('label'=>'Les reglements client', 'url'=>array('reglementClient/admin')),
	array('label'=>'Nouveau reglement client', 'url'=>array('reglementClient/create')),
);
?>

<div class="page-header">
<h2>Consulter un client</h2>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Cin',
		'Nom',
		'Prenom',
		'Tel',
		'Commentaire',
		'Adresse',
		'Reste',
		'Datec',
		'Datem',
	),
)); ?>

<br/>
<a class="btn " href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=client/update&id=<?php echo $model->id ; ?>">
Modifier
</a>

<a class="btn btn-warning" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=reglementClient/admin&ReglementClient[id_client]=<?php echo $model->id ; ?>">
Regelements
</a>
<a class="btn btn-success" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=vente/admin&Vente[id_client]=<?php echo $model->id ; ?>">
Ventes
</a>
	
<script>
document.getElementById("section").innerHTML ="Clients";
</script>