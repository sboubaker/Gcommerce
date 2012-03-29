<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'achat-form',
	'enableAjaxValidation'=>false,
)); ?>
<table>
<tr>
<td>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_article'); ?>
		<?php echo CHtml::dropDownList('Achat[id_article]', $model, 
              CHtml::listData(Article::model()->findAll(
                 array('order' => 'Designation')), 
                'id', 'Designation'));?>
		<?php echo $form->error($model,'id_article'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Quantite'); ?>
		<?php echo $form->textField($model,'Quantite'); ?>
		<?php echo $form->error($model,'Quantite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PuaHT'); ?>
		<?php echo $form->textField($model,'PuaHT'); ?>
		<?php echo $form->error($model,'PuaHT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remise'); ?>
		<?php echo $form->textField($model,'Remise'); ?>
		<?php echo $form->error($model,'Remise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tva'); ?>
		<?php echo $form->textField($model,'Tva'); ?>
		<?php echo $form->error($model,'Tva'); ?>
	</div>
</td><td style="width:50px;"/><td>
	<div class="row">
	<label for="P_U_TTC" class="required">P.U.TTC</label>
	<label id="P_U_TTC">0.0</label>
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
		<?php echo $form->labelEx($model,'id_fournisseur'); ?>
		<?php echo CHtml::dropDownList('Achat[id_fournisseur]', $model, 
              CHtml::listData(Fournisseur::model()->findAll(
                 array('order' => 'Contact')), 
                'id', 'Contact'));?>
		<?php echo $form->error($model,'id_fournisseur'); ?>
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
</td>
</tr>
<table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->