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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
	<?php echo $form->labelEx($model,'marcas_id_marca'); ?>
	<?php
	$marcas_list = CHtml::listData(Marcas::model()->findAll(), 'id_marca', 'nombre_marca');
	$options = array(
	        'tabindex' => '0',
	        'empty' => '(not set)',
	);
	?>
	<?php echo $form->dropDownList($model,'marcas_id_marca', $marcas_list, $options); ?>
	<?php echo $form->error($model,'marcas_id_marca'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->