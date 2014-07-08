<?php
/* @var $this PagosController */
/* @var $data Pagos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pago_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pago_id), array('view', 'id'=>$data->pago_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ordenes_Servicio_orden_servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->Ordenes_Servicio_orden_servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipos_Pago_tipo_pago_id')); ?>:</b>
	<?php echo CHtml::encode($data->Tipos_Pago_tipo_pago_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_pago')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_pago); ?>
	<br />


</div>