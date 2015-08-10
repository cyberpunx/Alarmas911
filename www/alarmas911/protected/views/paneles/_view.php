<?php
/* @var $this PanelesController */
/* @var $data Paneles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('panel_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->panel_id), array('view', 'id'=>$data->panel_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baterias_bateria_id')); ?>:</b>
	<?php echo CHtml::encode($data->baterias_bateria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelos_modelo_id')); ?>:</b>
	<?php echo CHtml::encode($data->modelos_modelo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_alarmas_sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::encode($data->sistema_alarmas_sistema_alarma_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_panel')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_panel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_panel')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_panel); ?>
	<br />


</div>