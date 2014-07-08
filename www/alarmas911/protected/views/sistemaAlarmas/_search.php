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
		<?php echo $form->textField($model,'nombre_sistema_alarma',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_sistema_alarma'); ?>
		<?php echo $form->textField($model,'observaciones_sistema_alarma',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Modelos_id_modelo'); ?>
		<?php echo $form->textField($model,'Modelos_id_modelo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Barrios_barrio_id'); ?>
		<?php echo $form->textField($model,'Barrios_barrio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipos_Monitoreo_tipo_monitoreo_id'); ?>
		<?php echo $form->textField($model,'Tipos_Monitoreo_tipo_monitoreo_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Clientes_cliente_id'); ?>
		<?php echo $form->textField($model,'Clientes_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->