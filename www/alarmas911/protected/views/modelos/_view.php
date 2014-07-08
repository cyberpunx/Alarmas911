<?php
/* @var $this ModelosController */
/* @var $data Modelos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_modelo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_modelo), array('view', 'id'=>$data->id_modelo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marcas_id_marca')); ?>:</b>
	<?php echo CHtml::encode($data->Marcas_id_marca); ?>
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