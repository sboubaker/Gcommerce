<?php
$this->breadcrumbs=array(
	'Reglement Clients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Les Client', 'url'=>array('client/admin')),
	array('label'=>'Nouveau Client', 'url'=>array('client/create')),
	array('label'=>'Les reglements client', 'url'=>array('reglementClient/admin')),
	array('label'=>'Nouveau reglement client', 'url'=>array('reglementClient/create')),
);
?>

<div class="page-header">
<h2>Consulter un reglement client</h2>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
                   'lable'=>'id_client',
                   'value'=>$model->idClient->Nom." ".$model->idClient->Prenom,
                 ),
		'Paye',
		'Reste',
		'Datec',
		'Datem',
	),
)); ?>
<!--
<br/>
<a class="btn " href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=reglementClient/update&id=<?php echo $model->id ; ?>">
Modifier
</a>
-->
<script>
document.getElementById("section").innerHTML ="Clients";
</script>