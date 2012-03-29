<?php
$this->breadcrumbs=array(
	'Fournisseurs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Les Fournisseur', 'url'=>array('fournisseur/admin')),
	array('label'=>'Nouveau fournisseur', 'url'=>array('fournisseur/create')),
);
?>

<div class="page-header">
<h2>Modifier un fournisseur</h2>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
document.getElementById("section").innerHTML ="Fournisseurs";
</script>