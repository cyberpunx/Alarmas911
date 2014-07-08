<?php
/* @var $this ClientesPagosFechaController */
/* @var $model ClientesPagosFecha */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-pagos-fecha-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pagos_pago_id'); ?>
		<?php echo $form->textField($model,'Pagos_pago_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Pagos_pago_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clientes_cliente_id'); ?>
		<?php echo $form->textField($model,'Clientes_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Clientes_cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->