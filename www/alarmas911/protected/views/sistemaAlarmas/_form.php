<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sistema-alarmas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_sistema_alarma'); ?>
		<?php echo $form->textField($model,'nombre_sistema_alarma',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'nombre_sistema_alarma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_sistema_alarma'); ?>
		<?php echo $form->textField($model,'observaciones_sistema_alarma',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'observaciones_sistema_alarma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Modelos_id_modelo'); ?>
		<?php echo $form->textField($model,'Modelos_id_modelo',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Modelos_id_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Barrios_barrio_id'); ?>
		<?php echo $form->textField($model,'Barrios_barrio_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Barrios_barrio_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipos_Monitoreo_tipo_monitoreo_id'); ?>
		<?php echo $form->textField($model,'Tipos_Monitoreo_tipo_monitoreo_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Tipos_Monitoreo_tipo_monitoreo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clientes_cliente_id'); ?>
		<?php echo $form->textField($model,'Clientes_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Clientes_cliente_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->