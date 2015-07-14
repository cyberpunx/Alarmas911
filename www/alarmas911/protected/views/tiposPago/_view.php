<?php
/* @var $this TiposPagoController */
/* @var $data TiposPago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_pago_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipo_pago_id), array('view', 'id'=>$data->tipo_pago_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipo_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_tipo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_tipo_pago); ?>
	<br />


</div>