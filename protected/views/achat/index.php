<?php
$this->breadcrumbs=array(
	'Achats',
);

$this->menu=array(
	array('label'=>'Les achats', 'url'=>array('achat/admin')),
	array('label'=>'Nouvelle achat', 'url'=>array('achat/create')),
);
?>

<h1>Achats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<script>
document.getElementById("section").innerHTML ="Achats";
</script>