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
		<?php echo $form->label($model,'Quantite'); ?>
		<?php echo $form->textField($model,'Quantite'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PuaHT'); ?>
		<?php echo $form->textField($model,'PuaHT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Remise'); ?>
		<?php echo $form->textField($model,'Remise'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tva'); ?>
		<?php echo $form->textField($model,'Tva'); ?>
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
		<?php echo $form->label($model,'id_fournisseur'); ?>
		<?php echo $form->textField($model,'id_fournisseur'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_utilisateur'); ?>
		<?php echo $form->textField($model,'id_utilisateur'); ?>
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