<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $data DetalleOrdenesServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle_orden_servicio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->detalle_orden_servicio_id), array('view', 'id'=>$data->detalle_orden_servicio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ordenes_Servicio_orden_servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->Ordenes_Servicio_orden_servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipos_Servicio_tipo_servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->Tipos_Servicio_tipo_servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion_detalle_orden_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion_detalle_orden_servicio); ?>
	<br />


</div>