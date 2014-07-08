<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tipo_pago_id'); ?>
		<?php echo $form->textField($model,'tipo_pago_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_tipo_pago'); ?>
		<?php echo $form->textField($model,'nombre_tipo_pago',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_tipo_pago'); ?>
		<?php echo $form->textField($model,'observaciones_tipo_pago',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->