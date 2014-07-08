<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $model DetalleOrdenesServicio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'detalle_orden_servicio_id'); ?>
		<?php echo $form->textField($model,'detalle_orden_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ordenes_Servicio_orden_servicio_id'); ?>
		<?php echo $form->textField($model,'Ordenes_Servicio_orden_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipos_Servicio_tipo_servicio_id'); ?>
		<?php echo $form->textField($model,'Tipos_Servicio_tipo_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion_detalle_orden_servicio'); ?>
		<?php echo $form->textField($model,'Descripcion_detalle_orden_servicio',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->