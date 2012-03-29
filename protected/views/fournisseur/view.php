<?php
$this->breadcrumbs=array(
	'Fournisseurs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Les Fournisseur', 'url'=>array('fournisseur/admin')),
	array('label'=>'Nouveau fournisseur', 'url'=>array('fournisseur/create')),
);
?>

<div class="page-header">
<h2>Consulter un fournisseur</h2>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Code',
		'Raison_social',
		'Contact',
		'Tel',
		'Fax',
		'Email',
		'Adresse',
		'Datec',
		'Datem',
	),
)); ?>
<br/>
<a class="btn " href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=fournisseur/update&id=<?php echo $model->id ; ?>">
Modifier
</a>
<a class="btn btn-warning" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=reglementClient/admin&ReglementClient[id_fournisseur]=<?php echo $model->id ; ?>">
Regelements
</a>
<a class="btn btn-success" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=achat/admin&Achat[id_fournisseur]=<?php echo $model->id ; ?>">
Achats
</a>