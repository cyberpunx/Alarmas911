<?php
/* @var $this OrdenesServicioController */
/* @var $data OrdenesServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_emision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_emision); ?>
	<br />

	<b><?php echo 'Cliente'; ?>:</b>
	<?php echo $data->sistemaAlarmas->usuarios->FullName; ?>
	<br />

	<b><?php echo 'Nombre del Sistema'; ?>:</b>
	<?php echo $data->sistemaAlarmas->nombre_sistema_alarma; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo 'Dirección'; ?>:</b>
	<?php echo $data->sistemaAlarmas->direccion_sistema_alarma; ?>
	<br />

	<b><?php echo 'Barrio'; ?>:</b>
	<?php echo $data->sistemaAlarmas->barrios->nombre_barrio; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_orden_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_orden_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vencimiento_orden')); ?>:</b>
	<?php if($data->vencimiento_orden == '' || $data->vencimiento_orden == '0000-00-00'){
		echo '-';
	}else{
		echo CHtml::encode($data->vencimiento_orden); 
	}
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />

</div>