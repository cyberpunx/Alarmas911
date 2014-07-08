<?php
/* @var $this PanelesController */
/* @var $data Paneles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('panel_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->panel_id), array('view', 'id'=>$data->panel_id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_panel')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_panel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_panel')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_panel); ?>
	<br />


</div>