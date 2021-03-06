<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipos-sensores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_sensor'); ?>
		<?php echo $form->textField($model,'nombre_sensor',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_sensor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_sensor'); ?>
		<?php echo $form->textArea($model,'observaciones_sensor',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_sensor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->