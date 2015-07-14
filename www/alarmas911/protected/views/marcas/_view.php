<?php
/* @var $this MarcasController */
/* @var $data Marcas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_marca), array('view', 'id'=>$data->id_marca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_marca')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_marca')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_marca); ?>
	<br />


</div>