<?php
/* @var $this BateriasController */
/* @var $model Baterias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'baterias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sistema_alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'sistema_alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sistema_alarmas_sistema_alarma_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelos_modelo_id'); ?>
		<?php echo $form->textField($model,'modelos_modelo_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'modelos_modelo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipos_baterias_tipo_bateria_id'); ?>
		<?php echo $form->textField($model,'tipos_baterias_tipo_bateria_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'tipos_baterias_tipo_bateria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_bateria'); ?>
		<?php echo $form->textField($model,'observaciones_bateria',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'observaciones_bateria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vida_util'); ?>
		<?php echo $form->textField($model,'vida_util',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'vida_util'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_alta'); ?>
		<?php echo $form->textField($model,'fecha_alta'); ?>
		<?php echo $form->error($model,'fecha_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_baja'); ?>
		<?php echo $form->textField($model,'fecha_baja'); ?>
		<?php echo $form->error($model,'fecha_baja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->