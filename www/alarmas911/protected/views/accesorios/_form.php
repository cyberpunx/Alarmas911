<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'accesorios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'modelos_modelo_id'); ?>
		<?php echo $form->textField($model,'modelos_modelo_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'modelos_modelo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baterias_bateria_id'); ?>
		<?php echo $form->textField($model,'baterias_bateria_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'baterias_bateria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistema_alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'sistema_alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sistema_alarmas_sistema_alarma_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_accesorio'); ?>
		<?php echo $form->textField($model,'nombre_accesorio',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_accesorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_accesorio'); ?>
		<?php echo $form->textArea($model,'observaciones_accesorio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_accesorio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->