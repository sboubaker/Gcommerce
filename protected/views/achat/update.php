<?php
$this->breadcrumbs=array(
	'Achats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Les achats', 'url'=>array('achat/admin')),
	array('label'=>'Nouvelle achat', 'url'=>array('achat/create')),
);
?>

<div class="page-header">
<h2>Modifier une achat</h2>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<script>
document.getElementById("section").innerHTML ="Achats";
</script>