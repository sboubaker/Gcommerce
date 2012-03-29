<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'magasin-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Code'); ?>
		<?php echo $form->textField($model,'Code',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nom'); ?>
		<?php echo $form->textField($model,'Nom',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nom'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Tel'); ?>
		<?php echo $form->textField($model,'Tel',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'Tel'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Fax'); ?>
		<?php echo $form->textField($model,'Fax',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'Fax'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Adresse'); ?>
		<?php echo $form->textField($model,'Adresse',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Adresse'); ?>
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
