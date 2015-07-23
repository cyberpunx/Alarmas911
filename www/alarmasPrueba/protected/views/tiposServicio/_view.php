<?php
/* @var $this TiposServicioController */
/* @var $data TiposServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_servicio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipo_servicio_id), array('view', 'id'=>$data->tipo_servicio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipo_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipo_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_tipo_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_tipo_servicio); ?>
	<br />


</div>