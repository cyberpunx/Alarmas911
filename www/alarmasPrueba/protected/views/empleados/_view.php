<?php
/* @var $this EmpleadosController */
/* @var $data Empleados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('empleado_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->empleado_id), array('view', 'id'=>$data->empleado_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personas_persona_id')); ?>:</b>
	<?php echo CHtml::encode($data->personas_persona_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcion')); ?>:</b>
	<?php echo CHtml::encode($data->funcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temporal')); ?>:</b>
	<?php echo CHtml::encode($data->temporal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>