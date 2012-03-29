<?php
$this->breadcrumbs=array(
	'Fournisseurs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Les Fournisseur', 'url'=>array('fournisseur/admin')),
	array('label'=>'Nouveau fournisseur', 'url'=>array('fournisseur/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('fournisseur-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-header">
<h2>Les fournisseurs</h2>
</div>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fournisseur-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'Code',
		'Raison_social',
		'Contact',
		'Tel',
		'Fax',
		/*
		'Email',
		'Adresse',
		'Datec',
		'Datem',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script>
document.getElementById("section").innerHTML ="Fournisseurs";
</script>