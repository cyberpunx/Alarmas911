<?php
/* @var $this PagosController */
/* @var $data Pagos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pago_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pago_id), array('view', 'id'=>$data->pago_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_usuario_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordenes_servicio_orden_servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->ordenes_servicio_orden_servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_pago_tipo_pago_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_pago_tipo_pago_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_pago')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_pago); ?>
	<br />


</div>