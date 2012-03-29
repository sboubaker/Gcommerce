<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Les Client', 'url'=>array('client/admin')),
	array('label'=>'Nouveau Client', 'url'=>array('client/create')),
	array('label'=>'Les reglements client', 'url'=>array('reglementClient/admin')),
	array('label'=>'Nouveau reglement client', 'url'=>array('reglementClient/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('client-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-header">
<h2>Les clients</h2>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',*/
		'Cin',
		'Nom',
		'Prenom',
		'Tel',
		'Reste',
		/*
		'Adresse',
		'Commentaire',
		'Datec',
		'Datem',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script>
document.getElementById("section").innerHTML ="Clients";
</script>