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

	<div class="row">
		<?php echo $form->labelEx($model,'tipos_cliente_tipo_cliente_id'); ?>
		<?php echo $form->textField($model,'tipos_cliente_tipo_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'tipos_cliente_tipo_cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personas_persona_id'); ?>
		<?php echo $form->textField($model,'personas_persona_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'personas_persona_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_cobro'); ?>
		<?php echo $form->textField($model,'direccion_cobro',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'direccion_cobro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistema_secundario_id'); ?>
		<?php echo $form->textField($model,'sistema_secundario_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sistema_secundario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factura'); ?>
		<?php echo $form->textField($model,'factura',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razon_social'); ?>
		<?php echo $form->textField($model,'razon_social',array('size'=>60,'maxlength'=>128)); ?>
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