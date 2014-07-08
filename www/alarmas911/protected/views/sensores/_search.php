<?php
/* @var $this SensoresController */
/* @var $model Sensores */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sensor_id'); ?>
		<?php echo $form->textField($model,'sensor_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Modelos_id_modelo'); ?>
		<?php echo $form->textField($model,'Modelos_id_modelo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Baterias_bateria_id'); ?>
		<?php echo $form->textField($model,'Baterias_bateria_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipos_Sensores_tipo_sensor_id'); ?>
		<?php echo $form->textField($model,'Tipos_Sensores_tipo_sensor_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Zonas_zona_id'); ?>
		<?php echo $form->textField($model,'Zonas_zona_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->