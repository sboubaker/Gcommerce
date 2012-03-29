<?php
$this->breadcrumbs=array(
	'Fournisseurs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Les Fournisseur', 'url'=>array('fournisseur/admin')),
	array('label'=>'Nouveau fournisseur', 'url'=>array('fournisseur/create')),
);
?>

<div class="page-header">
<h2>Nouveau fournisseur</h2>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
document.getElementById("section").innerHTML ="Fournisseurs";
</script>