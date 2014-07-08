<?php
/* @var $this OrdenesServicioController */
/* @var $data OrdenesServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden_servicio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orden_servicio_id), array('view', 'id'=>$data->orden_servicio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sistema_Alarmas_sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::encode($data->Sistema_Alarmas_sistema_alarma_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_emision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_emision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cierre')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cierre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_orden_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_orden_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />


</div>