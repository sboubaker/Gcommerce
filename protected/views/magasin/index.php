<?php
$this->breadcrumbs=array(
	'Magasins',
);

$this->menu=array(
	array('label'=>'Les magasins', 'url'=>array('magasin/admin')),
	array('label'=>'Nouveau Magasin', 'url'=>array('magasin/create')),
);
?>

<div class="page-header">
<h2>Les magasins</h2>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<script>
document.getElementById("section").innerHTML ="Magasins";
</script>