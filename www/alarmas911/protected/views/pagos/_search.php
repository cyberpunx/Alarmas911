<?php
/* @var $this PagosController */
/* @var $model Pagos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pago_id'); ?>
		<?php echo $form->textField($model,'pago_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ordenes_Servicio_orden_servicio_id'); ?>
		<?php echo $form->textField($model,'Ordenes_Servicio_orden_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipos_Pago_tipo_pago_id'); ?>
		<?php echo $form->textField($model,'Tipos_Pago_tipo_pago_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe'); ?>
		<?php echo $form->textField($model,'importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacion_pago'); ?>
		<?php echo $form->textField($model,'informacion_pago',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->