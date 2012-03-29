<?php
$this->breadcrumbs=array(
	'Reglement Clients'=>array('index'),
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
	$.fn.yiiGridView.update('reglement-client-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="page-header">
<h2>Les reglements client</h2>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reglement-client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                        'name'=>'id_client',
                        'filter'=>CHtml::listData(Client::model()->findAll(), 'id', 'Nom'),
                        'value'=>'Client::Model()->FindByPk($data->id_client)->Nom ." ". Client::Model()->FindByPk($data->id_client)->Prenom',
             ),
		'Paye',
		'Reste',
		'Datec',
		'Datem',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script>
document.getElementById("section").innerHTML ="Clients";
</script>