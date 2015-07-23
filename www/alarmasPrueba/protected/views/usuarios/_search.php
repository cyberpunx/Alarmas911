<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'usuario_id'); ?>
		<?php echo $form->textField($model,'usuario_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_celular'); ?>
		<?php echo $form->textField($model,'telefono_celular',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_fijo'); ?>
		<?php echo $form->textField($model,'telefono_fijo',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_alt'); ?>
		<?php echo $form->textField($model,'telefono_alt',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rol'); ?>
		<?php echo $form->textField($model,'rol',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentarios'); ?>
		<?php echo $form->textArea($model,'comentarios',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empleado_funcion'); ?>
		<?php echo $form->textField($model,'empleado_funcion',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empleado_temporal'); ?>
		<?php echo $form->textField($model,'empleado_temporal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empleado_activo'); ?>
		<?php echo $form->textField($model,'empleado_activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_direccion_cobro'); ?>
		<?php echo $form->textField($model,'cliente_direccion_cobro',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_sistema_secundario_id'); ?>
		<?php echo $form->textField($model,'cliente_sistema_secundario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_factura'); ?>
		<?php echo $form->textField($model,'cliente_factura',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_razon_social'); ?>
		<?php echo $form->textField($model,'cliente_razon_social',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_cuit'); ?>
		<?php echo $form->textField($model,'cliente_cuit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipos_cliente_tipo_cliente_id'); ?>
		<?php echo $form->textField($model,'tipos_cliente_tipo_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->