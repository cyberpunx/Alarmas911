<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleados-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'personas_persona_id'); ?>
		<?php echo $form->textField($model,'personas_persona_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'personas_persona_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funcion'); ?>
		<?php echo $form->textField($model,'funcion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'funcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temporal'); ?>
		<?php echo $form->textField($model,'temporal'); ?>
		<?php echo $form->error($model,'temporal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->