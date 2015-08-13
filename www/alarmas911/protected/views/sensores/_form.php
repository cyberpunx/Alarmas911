<?php
/* @var $this SensoresController */
/* @var $model Sensores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sensores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'baterias_bateria_id'); ?>
		<?php echo $form->textField($model,'baterias_bateria_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'baterias_bateria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipos_sensores_tipo_sensor_id'); ?>
		<?php echo $form->textField($model,'tipos_sensores_tipo_sensor_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'tipos_sensores_tipo_sensor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelos_modelo_id'); ?>
		<?php echo $form->textField($model,'modelos_modelo_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'modelos_modelo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zonas_zona_id'); ?>
		<?php echo $form->textField($model,'zonas_zona_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'zonas_zona_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->