<?php
/* @var $this PanelesController */
/* @var $model Paneles */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'panel_id'); ?>
		<?php echo $form->textField($model,'panel_id',array('size'=>11,'maxlength'=>11)); ?>
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
		<?php echo $form->label($model,'Sistema_Alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'Sistema_Alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_panel'); ?>
		<?php echo $form->textField($model,'observaciones_panel',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_panel'); ?>
		<?php echo $form->textField($model,'nombre_panel',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->