<?php
/* @var $this AccesoriosController */
/* @var $data Accesorios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('accesorio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->accesorio_id), array('view', 'id'=>$data->accesorio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Modelos_id_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->Modelos_id_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Baterias_bateria_id')); ?>:</b>
	<?php echo CHtml::encode($data->Baterias_bateria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sistema_Alarmas_sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::encode($data->Sistema_Alarmas_sistema_alarma_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_accesorio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_accesorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_accesorio')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_accesorio); ?>
	<br />


</div>