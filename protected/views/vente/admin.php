<?php
$this->breadcrumbs=array(
	'Ventes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Les ventes', 'url'=>array('vente/admin')),
	array('label'=>'Nouvelle vente', 'url'=>array('vente/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-header">
<h2>Les Ventes</h2>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                        'name'=>'id_article',
                        'filter'=>CHtml::listData(Article::model()->findAll(), 'id', 'Code'),
                        'value'=>'Article::Model()->FindByPk($data->id_article)->Code',
             ),
		array(
                        'name'=>'id_client',
                        'filter'=>CHtml::listData(Client::model()->findAll(), 'id', 'Nom'),
                        'value'=>'Client::Model()->FindByPk($data->id_client)->Nom ." ". Client::Model()->FindByPk($data->id_client)->Prenom',
             ),
		'Date',
		'TotalHT',
		'TotalTVA',
		'Pvente',
		'Paye',
		'Reste',
		'id_magasin',
		'id_utilisateur',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script>
document.getElementById("section").innerHTML ="Ventes";
</script>