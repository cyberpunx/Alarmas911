<?php
/* @var $this ZonasController */
/* @var $model Zonas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'zona_id'); ?>
		<?php echo $form->textField($model,'zona_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sistema_Alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'Sistema_Alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_zona'); ?>
		<?php echo $form->textField($model,'nombre_zona',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_zona'); ?>
		<?php echo $form->textField($model,'observaciones_zona',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->