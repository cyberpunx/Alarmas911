<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido'); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni'); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_persona'); ?>
		<?php echo $form->textField($model,'nombre_persona'); ?>
		<?php echo $form->error($model,'nombre_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_fijo'); ?>
		<?php echo $form->textField($model,'telefono_fijo'); ?>
		<?php echo $form->error($model,'telefono_fijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_celular'); ?>
		<?php echo $form->textField($model,'telefono_celular'); ?>
		<?php echo $form->error($model,'telefono_celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_alt'); ?>
		<?php echo $form->textField($model,'telefono_alt'); ?>
		<?php echo $form->error($model,'telefono_alt'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->