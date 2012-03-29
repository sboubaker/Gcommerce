<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fournisseur-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Code'); ?>
		<?php echo $form->textField($model,'Code',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Raison_social'); ?>
		<?php echo $form->textField($model,'Raison_social',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Raison_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact'); ?>
		<?php echo $form->textField($model,'Contact',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Contact'); ?>
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
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Adresse'); ?>
		<?php echo $form->textField($model,'Adresse',array('size'=>60,'maxlength'=>255)); ?>
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