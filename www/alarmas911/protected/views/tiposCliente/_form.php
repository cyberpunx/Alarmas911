<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipos-cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_tipo_cliente'); ?>
		<?php echo $form->textField($model,'nombre_tipo_cliente',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_tipo_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_tipo_cliente'); ?>
		<?php echo $form->textArea($model,'observaciones_tipo_cliente',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_tipo_cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->