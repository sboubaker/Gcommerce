<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Code'); ?>
		<?php echo $form->textField($model,'Code',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Designation'); ?>
		<?php echo $form->textField($model,'Designation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Designation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_famille'); ?>
		<?php echo $form->textField($model,'id_famille'); ?>
		<?php echo $form->error($model,'id_famille'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sousFamille'); ?>
		<?php echo $form->textField($model,'id_sousFamille'); ?>
		<?php echo $form->error($model,'id_sousFamille'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_marque'); ?>
		<?php echo $form->textField($model,'id_marque'); ?>
		<?php echo $form->error($model,'id_marque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_modele'); ?>
		<?php echo $form->textField($model,'id_modele'); ?>
		<?php echo $form->error($model,'id_modele'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PuaHT'); ?>
		<?php echo $form->textField($model,'PuaHT'); ?>
		<?php echo $form->error($model,'PuaHT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tva'); ?>
		<?php echo $form->textField($model,'Tva'); ?>
		<?php echo $form->error($model,'Tva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marge'); ?>
		<?php echo $form->textField($model,'Marge'); ?>
		<?php echo $form->error($model,'Marge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PuvTTCmin'); ?>
		<?php echo $form->textField($model,'PuvTTCmin'); ?>
		<?php echo $form->error($model,'PuvTTCmin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Datec'); ?>
		<?php echo $form->textField($model,'Datec'); ?>
		<?php echo $form->error($model,'Datec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Datem'); ?>
		<?php echo $form->textField($model,'Datem'); ?>
		<?php echo $form->error($model,'Datem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QuantiteMin'); ?>
		<?php echo $form->textField($model,'QuantiteMin'); ?>
		<?php echo $form->error($model,'QuantiteMin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->