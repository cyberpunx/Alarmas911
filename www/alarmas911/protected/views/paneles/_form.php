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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sistema_alarmas_sistema_alarma_id'); ?>
		<?php
			$this->widget('EJuiAutoCompleteFkField', array(
				'model'=>$model, 
				'attribute'=>'sistema_alarmas_sistema_alarma_id',
				'sourceUrl'=>Yii::app()->createUrl('/ordenesServicio/findSistemaAlarmas'), 
				'showFKField'=>true,
				'FKFieldSize'=>1, 
				'relName'=>'sistemaAlarmas',
				'displayAttr'=>'nombre_sistema_alarma', 
				'autoCompleteLength'=>60,
				'htmlOptions'=>array('size'=>50,'placeholder'=>'Ingresar nombre del sistema de alarmas'),
				'options'=>array(
					'minLength'=>0, 
				),
			));
		?>
		<?php echo $form->error($model,'sistema_alarmas_sistema_alarma_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_panel'); ?>
		<?php echo $form->textField($model,'nombre_panel',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_panel'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'modelos_modelo_id'); ?>
	<?php
		$modelos_list = CHtml::listData(Modelos::model()->findAll(), 'modelo_id', 'ModeloMarca');
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->