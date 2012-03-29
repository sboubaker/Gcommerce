<?php
$this->breadcrumbs=array(
	'Ventes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Les ventes', 'url'=>array('vente/admin')),
	array('label'=>'Nouvelle vente', 'url'=>array('vente/create')),
);
?>

<div class="page-header">
<h2>Modifier une Vente</h2>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
document.getElementById("section").innerHTML ="Ventes";
</script>