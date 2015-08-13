<?php
/* @var $this BarriosController */
/* @var $model Barrios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barrios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_barrio'); ?>
		<?php echo $form->textField($model,'nombre_barrio',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_barrio'); ?>
		<?php echo $form->textArea($model,'observaciones_barrio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_barrio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guerdar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->