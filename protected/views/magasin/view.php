<?php
$this->breadcrumbs=array(
	'Magasins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Les magasins', 'url'=>array('magasin/admin')),
	array('label'=>'Nouveau Magasin', 'url'=>array('magasin/create')),
);
?>

<div class="page-header">
<h2>Consulter un magasin</h2>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nom',
		'Code',
		'Adresse',
		'Tel',
		'Fax',
		'Datec',
		'Datem',
	),
)); ?>
<br/>
<a class="btn " href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=magasin/update&id=<?php echo $model->id ; ?>">
Modifier
</a>
<script>
document.getElementById("section").innerHTML ="Magasins";
</script>