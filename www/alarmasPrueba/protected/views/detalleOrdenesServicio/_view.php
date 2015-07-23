<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $data DetalleOrdenesServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle_orden_servicio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->detalle_orden_servicio_id), array('view', 'id'=>$data->detalle_orden_servicio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordenes_servicio_orden_servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->ordenes_servicio_orden_servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_servicio_tipo_servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_servicio_tipo_servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_detalle_orden_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_detalle_orden_servicio); ?>
	<br />


</div>