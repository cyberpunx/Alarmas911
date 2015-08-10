<?php
/* @var $this AccesoriosController */
/* @var $data Accesorios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('accesorio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->accesorio_id), array('view', 'id'=>$data->accesorio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelos_modelo_id')); ?>:</b>
	<?php echo CHtml::encode($data->modelos_modelo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baterias_bateria_id')); ?>:</b>
	<?php echo CHtml::encode($data->baterias_bateria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_alarmas_sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::encode($data->sistema_alarmas_sistema_alarma_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_accesorio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_accesorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_accesorio')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_accesorio); ?>
	<br />


</div>