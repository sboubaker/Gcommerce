
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reglement-client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_client'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		'model'=>$model->idClient,
        'sourceUrl'=>array('client/aclist'),
        'name'=>'client',
        'options'=>array(
		  'minLength'=>'1',
		 'select'=>"js: function(event, ui) {
         $('#reste').val(ui.item['reste']);
		 $('#idclient').val(ui.item['id']);
		 drest=ui.item['reste'];
		}"
        ),
        'htmlOptions'=>array(
          'size'=>45,
          'maxlength'=>45,
        )
		)); ?>
		<?php echo $form->error($model,'id_client'); ?>
	</div>
	
	
	<input id="idclient" name="ReglementClient[id_client]" type="hidden" value=""/>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Paye'); ?>
		<?php echo $form->textField($model,'Paye',array('id'=>'paye')); ?>
		<?php echo $form->error($model,'Paye'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Reste'); ?>
		<?php echo $form->textField($model,'Reste',array('id'=>'reste')); ?>
		<?php echo $form->error($model,'Reste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Datec'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		$this->widget('CJuiDateTimePicker',array(
        'model'=>$model, //Model object
        'attribute'=>'Datec', //attribute name
                'mode'=>'datetime' ,//use "time","date" or "datetime" (default)
        'options'=>array('dateFormat'=>'yy-mm-dd'),
		'language' => 'fr'		// jquery plugin options
		));
		?>
		<?php echo $form->error($model,'Datec'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
var drest=0.0;
$("#paye").keyup(function(event) {
   $("#reste").val(drest - $(this).val());
});
</script>