<?php
/* @var $this ClientesPagosFechaController */
/* @var $data ClientesPagosFecha */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_pago_fecha_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cliente_pago_fecha_id), array('view', 'id'=>$data->cliente_pago_fecha_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pagos_pago_id')); ?>:</b>
	<?php echo CHtml::encode($data->Pagos_pago_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clientes_cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->Clientes_cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>