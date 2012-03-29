<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Code')); ?>:</b>
	<?php echo CHtml::encode($data->Code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Raison_social')); ?>:</b>
	<?php echo CHtml::encode($data->Raison_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact')); ?>:</b>
	<?php echo CHtml::encode($data->Contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tel')); ?>:</b>
	<?php echo CHtml::encode($data->Tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fax')); ?>:</b>
	<?php echo CHtml::encode($data->Fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Adresse')); ?>:</b>
	<?php echo CHtml::encode($data->Adresse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datec')); ?>:</b>
	<?php echo CHtml::encode($data->Datec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datem')); ?>:</b>
	<?php echo CHtml::encode($data->Datem); ?>
	<br />

	*/ ?>

</div>