<?php
/* @var $this ModelosController */
/* @var $model Modelos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_modelo'); ?>
		<?php echo $form->textField($model,'id_modelo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Marcas_id_marca'); ?>
		<?php echo $form->textField($model,'Marcas_id_marca',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_modelo'); ?>
		<?php echo $form->textField($model,'nombre_modelo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_modelo'); ?>
		<?php echo $form->textField($model,'observaciones_modelo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discriminante'); ?>
		<?php echo $form->textField($model,'discriminante',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->