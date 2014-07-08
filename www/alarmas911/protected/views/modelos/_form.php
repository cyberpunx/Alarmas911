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
		<?php echo $form->labelEx($model,'Marcas_id_marca'); ?>
		<?php echo $form->textField($model,'Marcas_id_marca',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Marcas_id_marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_modelo'); ?>
		<?php echo $form->textField($model,'nombre_modelo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'nombre_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_modelo'); ?>
		<?php echo $form->textField($model,'observaciones_modelo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'observaciones_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discriminante'); ?>
		<?php echo $form->textField($model,'discriminante',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'discriminante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->