<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'orden_servicio_id'); ?>
		<?php echo $form->textField($model,'orden_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sistema_Alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'Sistema_Alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_emision'); ?>
		<?php echo $form->textField($model,'fecha_emision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cierre'); ?>
		<?php echo $form->textField($model,'fecha_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe'); ?>
		<?php echo $form->textField($model,'importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_orden_servicio'); ?>
		<?php echo $form->textField($model,'observaciones_orden_servicio',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->