<?php
/* @var $this SensoresController */
/* @var $data Sensores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sensor_id), array('view', 'id'=>$data->sensor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Modelos_id_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->Modelos_id_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Baterias_bateria_id')); ?>:</b>
	<?php echo CHtml::encode($data->Baterias_bateria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipos_Sensores_tipo_sensor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Tipos_Sensores_tipo_sensor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Zonas_zona_id')); ?>:</b>
	<?php echo CHtml::encode($data->Zonas_zona_id); ?>
	<br />


</div>