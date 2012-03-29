<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Code')); ?>:</b>
	<?php echo CHtml::encode($data->Code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Designation')); ?>:</b>
	<?php echo CHtml::encode($data->Designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_famille')); ?>:</b>
	<?php echo CHtml::encode($data->id_famille); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sousFamille')); ?>:</b>
	<?php echo CHtml::encode($data->id_sousFamille); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marque')); ?>:</b>
	<?php echo CHtml::encode($data->id_marque); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_modele')); ?>:</b>
	<?php echo CHtml::encode($data->id_modele); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PuaHT')); ?>:</b>
	<?php echo CHtml::encode($data->PuaHT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tva')); ?>:</b>
	<?php echo CHtml::encode($data->Tva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marge')); ?>:</b>
	<?php echo CHtml::encode($data->Marge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PuvTTCmin')); ?>:</b>
	<?php echo CHtml::encode($data->PuvTTCmin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datec')); ?>:</b>
	<?php echo CHtml::encode($data->Datec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datem')); ?>:</b>
	<?php echo CHtml::encode($data->Datem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QuantiteMin')); ?>:</b>
	<?php echo CHtml::encode($data->QuantiteMin); ?>
	<br />

	*/ ?>

</div>