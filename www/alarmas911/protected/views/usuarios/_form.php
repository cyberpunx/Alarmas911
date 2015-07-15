<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_celular'); ?>
		<?php echo $form->textField($model,'telefono_celular',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'telefono_celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_fijo'); ?>
		<?php echo $form->textField($model,'telefono_fijo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'telefono_fijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_alt'); ?>
		<?php echo $form->textField($model,'telefono_alt',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'telefono_alt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rol'); ?>
		<?php echo $form->textField($model,'rol',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comentarios'); ?>
		<?php echo $form->textArea($model,'comentarios',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comentarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empleado_funcion'); ?>
		<?php echo $form->textField($model,'empleado_funcion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'empleado_funcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empleado_temporal'); ?>
		<?php echo $form->textField($model,'empleado_temporal'); ?>
		<?php echo $form->error($model,'empleado_temporal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empleado_activo'); ?>
		<?php echo $form->textField($model,'empleado_activo'); ?>
		<?php echo $form->error($model,'empleado_activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_direccion_cobro'); ?>
		<?php echo $form->textField($model,'cliente_direccion_cobro',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cliente_direccion_cobro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_sistema_secundario_id'); ?>
		<?php echo $form->textField($model,'cliente_sistema_secundario_id'); ?>
		<?php echo $form->error($model,'cliente_sistema_secundario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_factura'); ?>
		<?php echo $form->textField($model,'cliente_factura',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cliente_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_razon_social'); ?>
		<?php echo $form->textField($model,'cliente_razon_social',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cliente_razon_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_cuit'); ?>
		<?php echo $form->textField($model,'cliente_cuit'); ?>
		<?php echo $form->error($model,'cliente_cuit'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'tipos_cliente_tipo_cliente_id'); ?>
	<?php
	$tiposCliente_list = CHtml::listData(TiposCliente::model()->findAll(), 'tipo_cliente_id', 'nombre_tipo_cliente');
	$options = array(
	        'tabindex' => '1',
	);
	?>
	<?php echo $form->dropDownList($model,'tipos_cliente_tipo_cliente_id', $tiposCliente_list, $options); ?>
	<?php echo $form->error($model,'tipos_cliente_tipo_cliente_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->