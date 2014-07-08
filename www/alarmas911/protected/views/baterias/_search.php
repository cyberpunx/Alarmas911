<?php
/* @var $this BateriasController */
/* @var $model Baterias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bateria_id'); ?>
		<?php echo $form->textField($model,'bateria_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sistema_Alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'Sistema_Alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Modelos_id_modelo'); ?>
		<?php echo $form->textField($model,'Modelos_id_modelo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipos_Baterias_tipo_bateria_id'); ?>
		<?php echo $form->textField($model,'Tipos_Baterias_tipo_bateria_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_bateria'); ?>
		<?php echo $form->textField($model,'observaciones_bateria',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vida_util'); ?>
		<?php echo $form->textField($model,'vida_util',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_alta'); ?>
		<?php echo $form->textField($model,'fecha_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_baja'); ?>
		<?php echo $form->textField($model,'fecha_baja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->