<?php
/* @var $this BateriasController */
/* @var $data Baterias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bateria_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bateria_id), array('view', 'id'=>$data->bateria_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_alarmas_sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::encode($data->sistema_alarmas_sistema_alarma_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelos_modelo_id')); ?>:</b>
	<?php echo CHtml::encode($data->modelos_modelo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_baterias_tipo_bateria_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_baterias_tipo_bateria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_bateria')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_bateria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vida_util')); ?>:</b>
	<?php echo CHtml::encode($data->vida_util); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_alta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_alta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_baja')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_baja); ?>
	<br />

	*/ ?>

</div>