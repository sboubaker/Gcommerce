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
		<?php echo $form->label($model,'Cin'); ?>
		<?php echo $form->textField($model,'Cin',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nom'); ?>
		<?php echo $form->textField($model,'Nom',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Prenom'); ?>
		<?php echo $form->textField($model,'Prenom',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tel'); ?>
		<?php echo $form->textField($model,'Tel',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Commentaire'); ?>
		<?php echo $form->textField($model,'Commentaire',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Adresse'); ?>
		<?php echo $form->textField($model,'Adresse',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reste'); ?>
		<?php echo $form->textField($model,'Reste'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datec'); ?>
		<?php echo $form->textField($model,'Datec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datem'); ?>
		<?php echo $form->textField($model,'Datem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->