<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Code'); ?>
		<?php echo $form->textField($model,'Code',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Designation'); ?>
		<?php echo $form->textField($model,'Designation',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_famille'); ?>
		<?php echo $form->textField($model,'id_famille'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sousFamille'); ?>
		<?php echo $form->textField($model,'id_sousFamille'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_marque'); ?>
		<?php echo $form->textField($model,'id_marque'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_modele'); ?>
		<?php echo $form->textField($model,'id_modele'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PuaHT'); ?>
		<?php echo $form->textField($model,'PuaHT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tva'); ?>
		<?php echo $form->textField($model,'Tva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Marge'); ?>
		<?php echo $form->textField($model,'Marge'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PuvTTCmin'); ?>
		<?php echo $form->textField($model,'PuvTTCmin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datec'); ?>
		<?php echo $form->textField($model,'Datec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datem'); ?>
		<?php echo $form->textField($model,'Datem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QuantiteMin'); ?>
		<?php echo $form->textField($model,'QuantiteMin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->