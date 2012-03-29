<?php
$this->breadcrumbs=array(
	'Ventes',
);

$this->menu=array(
	array('label'=>'Create Vente', 'url'=>array('create')),
	array('label'=>'Manage Vente', 'url'=>array('admin')),
);
?>

<div class="page-header">
<h2>Nouveau Vente</h2>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<script>
document.getElementById("section").innerHTML ="Ventes";
</script>