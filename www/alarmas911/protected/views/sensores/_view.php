<?php
/* @var $this SensoresController */
/* @var $data Sensores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sensor_id), array('view', 'id'=>$data->sensor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baterias_bateria_id')); ?>:</b>
	<?php echo CHtml::encode($data->baterias_bateria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_sensores_tipo_sensor_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_sensores_tipo_sensor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelos_modelo_id')); ?>:</b>
	<?php echo CHtml::encode($data->modelos_modelo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zonas_zona_id')); ?>:</b>
	<?php echo CHtml::encode($data->zonas_zona_id); ?>
	<br />


</div>