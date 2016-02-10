<?php
/* @var $this OrdenesServicioController */
/* @var $data OrdenesServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_alarma_id')); ?>:</b>
	<?php echo CHtml::encode($data->sistema_alarma_id); ?>
	<br />

	<b><?php echo 'Cliente'; ?>:</b>
	<?php echo $data->usuarios->FullName; ?>
	<br />

	<b><?php echo 'Nombre del Sistema'; ?>:</b>
	<?php echo $data->nombre_sistema_alarma; ?>
	<br />

	<b><?php echo 'Importe'; ?>:</b>
	<?php echo "$".CHtml::encode($data->tiposMonitoreo->valor); ?>
	<br />	
</div>