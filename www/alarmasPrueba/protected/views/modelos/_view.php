<?php
/* @var $this ModelosController */
/* @var $data Modelos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->modelo_id), array('view', 'id'=>$data->modelo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcas_marca_id')); ?>:</b>
	<?php echo CHtml::encode($data->marcas_marca_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discriminante')); ?>:</b>
	<?php echo CHtml::encode($data->discriminante); ?>
	<br />


</div>