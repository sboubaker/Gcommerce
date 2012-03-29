<?php
$this->breadcrumbs=array(
	'Fournisseurs',
);

$this->menu=array(
	array('label'=>'Les Fournisseur', 'url'=>array('fournisseur/admin')),
	array('label'=>'Nouveau fournisseur', 'url'=>array('fournisseur/create')),
);
?>

<h1>Fournisseurs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<script>
document.getElementById("section").innerHTML ="Fournisseurs";
</script>
