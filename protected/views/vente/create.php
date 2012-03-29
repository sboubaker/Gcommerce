<?php
$this->breadcrumbs=array(
	'Ventes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Les ventes', 'url'=>array('vente/admin')),
	array('label'=>'Nouvelle vente', 'url'=>array('vente/create')),
);
?>

<div class="page-header">
<h2>Nouvelle Vente</h2>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
document.getElementById("section").innerHTML ="Ventes";
</script>