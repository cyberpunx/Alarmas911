<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cliente_id), array('view', 'id'=>$data->cliente_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipos_Cliente_tipo_cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->Tipos_Cliente_tipo_cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_persona_id')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_persona_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_cobro')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_cobro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abono_mensual')); ?>:</b>
	<?php echo CHtml::encode($data->abono_mensual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_secundario_id')); ?>:</b>
	<?php echo CHtml::encode($data->sistema_secundario_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factura')); ?>:</b>
	<?php echo CHtml::encode($data->factura); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('razon_social')); ?>:</b>
	<?php echo CHtml::encode($data->razon_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuit')); ?>:</b>
	<?php echo CHtml::encode($data->cuit); ?>
	<br />

	*/ ?>

</div>