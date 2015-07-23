<?php
/* @var $this MarcasController */
/* @var $data Marcas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->marca_id), array('view', 'id'=>$data->marca_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_marca')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_marca')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_marca); ?>
	<br />


</div>