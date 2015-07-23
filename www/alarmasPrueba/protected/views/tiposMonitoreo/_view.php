<?php
/* @var $this TiposMonitoreoController */
/* @var $data TiposMonitoreo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_monitoreo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipo_monitoreo_id), array('view', 'id'=>$data->tipo_monitoreo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipo_monitoreo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipo_monitoreo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />


</div>