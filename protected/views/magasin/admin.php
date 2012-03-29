<?php
$this->breadcrumbs=array(
	'Magasins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Les magasins', 'url'=>array('magasin/admin')),
	array('label'=>'Nouveau Magasin', 'url'=>array('magasin/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('magasin-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-header">
<h2>Les magasins</h2>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'magasin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Code',
		'Nom',
		'Tel',
		'Fax',
		'Adresse',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script>
document.getElementById("section").innerHTML ="Magasins";
</script>