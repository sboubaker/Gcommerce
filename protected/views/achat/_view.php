<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_article')); ?>:</b>
	<?php echo CHtml::encode($data->id_article); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Quantite')); ?>:</b>
	<?php echo CHtml::encode($data->Quantite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PuaHT')); ?>:</b>
	<?php echo CHtml::encode($data->PuaHT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Remise')); ?>:</b>
	<?php echo CHtml::encode($data->Remise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tva')); ?>:</b>
	<?php echo CHtml::encode($data->Tva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Paye')); ?>:</b>
	<?php echo CHtml::encode($data->Paye); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Reste')); ?>:</b>
	<?php echo CHtml::encode($data->Reste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fournisseur')); ?>:</b>
	<?php echo CHtml::encode($data->id_fournisseur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_utilisateur')); ?>:</b>
	<?php echo CHtml::encode($data->id_utilisateur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datec')); ?>:</b>
	<?php echo CHtml::encode($data->Datec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datem')); ?>:</b>
	<?php echo CHtml::encode($data->Datem); ?>
	<br />

	*/ ?>

</div>