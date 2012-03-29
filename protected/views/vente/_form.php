<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_article'); ?>
		<?php echo $form->textField($model,'id_article'); ?>
		<?php echo $form->error($model,'id_article'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_client'); ?>
		<?php echo $form->textField($model,'id_client'); ?>
		<?php echo $form->error($model,'id_client'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TotalHT'); ?>
		<?php echo $form->textField($model,'TotalHT'); ?>
		<?php echo $form->error($model,'TotalHT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TotalTVA'); ?>
		<?php echo $form->textField($model,'TotalTVA'); ?>
		<?php echo $form->error($model,'TotalTVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pvente'); ?>
		<?php echo $form->textField($model,'Pvente'); ?>
		<?php echo $form->error($model,'Pvente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Paye'); ?>
		<?php echo $form->textField($model,'Paye'); ?>
		<?php echo $form->error($model,'Paye'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Reste'); ?>
		<?php echo $form->textField($model,'Reste'); ?>
		<?php echo $form->error($model,'Reste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_magasin'); ?>
		<?php echo $form->textField($model,'id_magasin'); ?>
		<?php echo $form->error($model,'id_magasin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_utilisateur'); ?>
		<?php echo $form->textField($model,'id_utilisateur'); ?>
		<?php echo $form->error($model,'id_utilisateur'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->