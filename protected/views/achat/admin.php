<?php
$this->breadcrumbs=array(
	'Achats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Les achats', 'url'=>array('achat/admin')),
	array('label'=>'Nouvelle achat', 'url'=>array('achat/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('achat-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="page-header">
<h2>Les achats</h2>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'achat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'id_article',
		'Quantite',
		'PuaHT',
		'Remise',
		'Tva',
		/*
		'Paye',
		'Reste',
		'id_fournisseur',
		'id_utilisateur',
		'Datec',
		'Datem',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<script>
document.getElementById("section").innerHTML ="Achats";
</script>
