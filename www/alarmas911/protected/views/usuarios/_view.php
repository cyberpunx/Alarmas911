<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuario_id), array('view', 'id'=>$data->usuario_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::encode($data->dni); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_celular')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_fijo')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_fijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_alt')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rol')); ?>:</b>
	<?php echo CHtml::encode($data->rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empleado_funcion')); ?>:</b>
	<?php echo CHtml::encode($data->empleado_funcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empleado_temporal')); ?>:</b>
	<?php echo CHtml::encode($data->empleado_temporal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empleado_activo')); ?>:</b>
	<?php echo CHtml::encode($data->empleado_activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_direccion_cobro')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_direccion_cobro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_sistema_secundario_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_sistema_secundario_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_factura')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_razon_social')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_razon_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_cuit')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_cuit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_cliente_tipo_cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_cliente_tipo_cliente_id); ?>
	<br />

	*/ ?>

</div>