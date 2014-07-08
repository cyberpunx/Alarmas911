<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipos_Cliente_tipo_cliente_id'); ?>
		<?php echo $form->textField($model,'Tipos_Cliente_tipo_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Persona_persona_id'); ?>
		<?php echo $form->textField($model,'Persona_persona_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_cobro'); ?>
		<?php echo $form->textField($model,'direccion_cobro',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abono_mensual'); ?>
		<?php echo $form->textField($model,'abono_mensual',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sistema_secundario_id'); ?>
		<?php echo $form->textField($model,'sistema_secundario_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factura'); ?>
		<?php echo $form->textField($model,'factura',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'razon_social'); ?>
		<?php echo $form->textField($model,'razon_social',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->