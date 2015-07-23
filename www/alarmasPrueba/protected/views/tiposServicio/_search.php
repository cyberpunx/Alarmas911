<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tipo_servicio_id'); ?>
		<?php echo $form->textField($model,'tipo_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_tipo_servicio'); ?>
		<?php echo $form->textField($model,'nombre_tipo_servicio',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_tipo_servicio'); ?>
		<?php echo $form->textArea($model,'observaciones_tipo_servicio',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->