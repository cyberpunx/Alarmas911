<?php
/* @var $this TiposClienteController */
/* @var $data TiposCliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_cliente_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipo_cliente_id), array('view', 'id'=>$data->tipo_cliente_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipo_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipo_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_tipo_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_tipo_cliente); ?>
	<br />


</div>