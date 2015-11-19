<?php
/* @var $this PanelesController */
/* @var $model Paneles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paneles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>	

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_panel'); ?>
		<?php echo $form->textField($model,'nombre_panel',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_panel'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'modelos_modelo_id'); ?>
	<?php
		$modelos_list = CHtml::listData(Modelos::model()->findAll(array("condition"=>"discriminante = 'PAN' ")), 'modelo_id', 'ModeloMarca');
			$options = array(
			        'tabindex' => '0',
			        'empty' => '(not set)',
			);
	?>
	<?php echo $form->dropDownList($model,'modelos_modelo_id', $modelos_list, $options); ?>
	<?php echo $form->error($model,'modelos_modelo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_panel'); ?>
		<?php echo $form->textArea($model,'observaciones_panel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_panel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->