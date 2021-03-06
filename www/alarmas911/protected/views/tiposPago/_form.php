<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipos-pago-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_tipo_pago'); ?>
		<?php echo $form->textField($model,'nombre_tipo_pago',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_tipo_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_tipo_pago'); ?>
		<?php echo $form->textArea($model,'observaciones_tipo_pago',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_tipo_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->