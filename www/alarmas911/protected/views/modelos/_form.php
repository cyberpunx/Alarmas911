<?php
/* @var $this ModelosController */
/* @var $model Modelos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'modelos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
	<?php echo $form->labelEx($model,'marcas_marca_id'); ?>
	<?php
	$marcas_list = CHtml::listData(Marcas::model()->findAll(), 'marca_id', 'nombre_marca');
	$options = array(
	        'tabindex' => '0',
	        'empty' => '(not set)',
	);
	?>
	<?php echo $form->dropDownList($model,'marcas_marca_id', $marcas_list, $options); ?>
	<?php echo $form->error($model,'marcas_marca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_modelo'); ?>
		<?php echo $form->textField($model,'nombre_modelo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_modelo'); ?>
		<?php echo $form->textArea($model,'observaciones_modelo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discriminante'); ?>
		<?php echo $form->textField($model,'discriminante',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'discriminante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->