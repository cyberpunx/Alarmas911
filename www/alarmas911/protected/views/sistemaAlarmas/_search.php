<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_sistema_alarma'); ?>
		<?php echo $form->textField($model,'nombre_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_sistema_alarma'); ?>
		<?php echo $form->textField($model,'observaciones_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'direccion_sistema_alarma'); ?>
		<?php echo $form->textField($model,'direccion_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'modelos_modelo_id'); ?>
		<?php echo $form->textField($model,'modelos_modelo_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barrios_barrio_id'); ?>
		<?php echo $form->textField($model,'barrios_barrio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipos_monitoreo_tipo_monitoreo_id'); ?>
		<?php echo $form->textField($model,'tipos_monitoreo_tipo_monitoreo_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarios_usuario_id'); ?>
		<?php echo $form->textField($model,'usuarios_usuario_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->