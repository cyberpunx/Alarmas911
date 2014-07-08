<?php
/* @var $this TiposBateriasController */
/* @var $data TiposBaterias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_bateria_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipo_bateria_id), array('view', 'id'=>$data->tipo_bateria_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>