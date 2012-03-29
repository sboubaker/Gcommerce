<?php
$this->breadcrumbs=array(
	'Magasins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Les magasins', 'url'=>array('magasin/admin')),
	array('label'=>'Nouveau Magasin', 'url'=>array('magasin/create')),
);
?>

<div class="page-header">
<h1>Nouveau magasin</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>


<script>
document.getElementById("section").innerHTML ="Magasins";
</script>
