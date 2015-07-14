<?php
/* @var $this BarriosController */
/* @var $data Barrios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->barrio_id), array('view', 'id'=>$data->barrio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_barrio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_barrio')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_barrio); ?>
	<br />


</div>