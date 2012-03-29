<?php
$this->breadcrumbs=array(
	'Reglement Clients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Les Client', 'url'=>array('client/admin')),
	array('label'=>'Nouveau Client', 'url'=>array('client/create')),
	array('label'=>'Les reglements client', 'url'=>array('reglementClient/admin')),
	array('label'=>'Nouveau reglement client', 'url'=>array('reglementClient/create')),
);
?>

<div class="page-header">
<h2>Modifier un reglement client</h2>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
document.getElementById("section").innerHTML ="Clients";
</script>