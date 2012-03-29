<?php
$this->breadcrumbs=array(
	'Magasins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Les magasins', 'url'=>array('magasin/admin')),
	array('label'=>'Nouveau Magasin', 'url'=>array('magasin/create')),
);
?>

<div class="page-header">
<h2>Modifier un magasin</h2>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
document.getElementById("section").innerHTML ="Magasins";
</script>