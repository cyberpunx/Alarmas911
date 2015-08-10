<?php
/* @var $this ZonasController */
/* @var $data Zonas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->zona_id), array('view', 'id'=>$data->zona_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_alarmas_sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::encode($data->sistema_alarmas_sistema_alarma_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_zona')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_zona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_zona')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_zona); ?>
	<br />


</div>