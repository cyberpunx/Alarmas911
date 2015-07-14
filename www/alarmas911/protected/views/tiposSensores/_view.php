<?php
/* @var $this TiposSensoresController */
/* @var $data TiposSensores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sensor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipo_sensor_id), array('view', 'id'=>$data->tipo_sensor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_sensor')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_sensor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_sensor')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_sensor); ?>
	<br />


</div>