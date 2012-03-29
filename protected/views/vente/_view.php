<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_article')); ?>:</b>
	<?php echo CHtml::encode($data->id_article); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_client')); ?>:</b>
	<?php echo CHtml::encode($data->id_client); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date')); ?>:</b>
	<?php echo CHtml::encode($data->Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TotalHT')); ?>:</b>
	<?php echo CHtml::encode($data->TotalHT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TotalTVA')); ?>:</b>
	<?php echo CHtml::encode($data->TotalTVA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pvente')); ?>:</b>
	<?php echo CHtml::encode($data->Pvente); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Paye')); ?>:</b>
	<?php echo CHtml::encode($data->Paye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reste')); ?>:</b>
	<?php echo CHtml::encode($data->Reste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_magasin')); ?>:</b>
	<?php echo CHtml::encode($data->id_magasin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_utilisateur')); ?>:</b>
	<?php echo CHtml::encode($data->id_utilisateur); ?>
	<br />

	*/ ?>

</div>