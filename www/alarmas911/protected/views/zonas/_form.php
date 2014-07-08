<?php
/* @var $this ZonasController */
/* @var $model Zonas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zonas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Sistema_Alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'Sistema_Alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Sistema_Alarmas_sistema_alarma_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_zona'); ?>
		<?php echo $form->textField($model,'nombre_zona',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'nombre_zona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_zona'); ?>
		<?php echo $form->textField($model,'observaciones_zona',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'observaciones_zona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->