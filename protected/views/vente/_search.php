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
		<?php echo $form->label($model,'id_article'); ?>
		<?php echo $form->textField($model,'id_article'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_client'); ?>
		<?php echo $form->textField($model,'id_client'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TotalHT'); ?>
		<?php echo $form->textField($model,'TotalHT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TotalTVA'); ?>
		<?php echo $form->textField($model,'TotalTVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pvente'); ?>
		<?php echo $form->textField($model,'Pvente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Paye'); ?>
		<?php echo $form->textField($model,'Paye'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reste'); ?>
		<?php echo $form->textField($model,'Reste'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_magasin'); ?>
		<?php echo $form->textField($model,'id_magasin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_utilisateur'); ?>
		<?php echo $form->textField($model,'id_utilisateur'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->