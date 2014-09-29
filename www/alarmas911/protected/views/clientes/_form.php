<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Tipos_Cliente_tipo_cliente_id'); ?>
		<?php echo $form->textField($model,'Tipos_Cliente_tipo_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Tipos_Cliente_tipo_cliente_id'); ?>
	</div>
-->	

	<div class="row">
		<?php echo $form->labelEx($model,'Tipos_Cliente_tipo_cliente_id'); ?>
		<?php
			$role_list = CHtml::listData(tiposCliente::model()->findAll(), 'tipo_cliente_id', 'nombre_tipo_cliente');
			$options = array(
			        'tabindex' => '0',
			        'empty' => '(not set)',
			);
		?>
		<?php echo $form->dropDownList($model,'Tipos_Cliente_tipo_cliente_id', $role_list, $options); ?>
		<?php echo $form->error($model,'Tipos_Cliente_tipo_cliente_id'); ?>
	</div>

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Persona_persona_id'); ?>
		<?php echo $form->textField($model,'Persona_persona_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Persona_persona_id'); ?>
	</div>
-->	

	<div class="row">
		<?php echo $form->labelEx($model,'Persona_persona_id'); ?>
		<?php
			$role_list = CHtml::listData(persona::model()->findAll(), 'persona_id', 'nombre_persona');
			$options = array(
			        'tabindex' => '0',
			        'empty' => '(not set)',
			);
		?>
		<?php echo $form->dropDownList($model,'Persona_persona_id', $role_list, $options); ?>
		<?php echo $form->error($model,'Persona_persona_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'direccion_cobro'); ?>
		<?php echo $form->textField($model,'direccion_cobro',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'direccion_cobro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abono_mensual'); ?>
		<?php echo $form->textField($model,'abono_mensual',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'abono_mensual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistema_secundario_id'); ?>
		<?php echo $form->textField($model,'sistema_secundario_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sistema_secundario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factura'); ?>
		<?php echo $form->textField($model,'factura',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razon_social'); ?>
		<?php echo $form->textField($model,'razon_social',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'razon_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cuit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->