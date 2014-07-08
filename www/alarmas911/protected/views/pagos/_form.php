<?php
/* @var $this PagosController */
/* @var $model Pagos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Ordenes_Servicio_orden_servicio_id'); ?>
		<?php echo $form->textField($model,'Ordenes_Servicio_orden_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Ordenes_Servicio_orden_servicio_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipos_Pago_tipo_pago_id'); ?>
		<?php echo $form->textField($model,'Tipos_Pago_tipo_pago_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Tipos_Pago_tipo_pago_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importe'); ?>
		<?php echo $form->textField($model,'importe'); ?>
		<?php echo $form->error($model,'importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacion_pago'); ?>
		<?php echo $form->textField($model,'informacion_pago',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'informacion_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->