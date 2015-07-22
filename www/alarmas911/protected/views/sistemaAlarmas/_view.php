<?php
/* @var $this SistemaAlarmasController */
/* @var $data SistemaAlarmas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sistema_alarma_id), array('view', 'id'=>$data->sistema_alarma_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_sistema_alarma')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_sistema_alarma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_sistema_alarma')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_sistema_alarma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelos_modelo_id')); ?>:</b>
	<?php echo CHtml::encode($data->modelos_modelo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrios_barrio_id')); ?>:</b>
	<?php echo CHtml::encode($data->barrios_barrio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_monitoreo_tipo_monitoreo_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_monitoreo_tipo_monitoreo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_usuario_id); ?>
	<br />


</div>