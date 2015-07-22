<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ordenes-servicio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'fecha_emision'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_emision',
				'value'=>$model->fecha_emision,
				// additional javascript options for the date picker plugin
				'options'=>array(
					'showAnim'=>'fold',
					'showButtonPanel'=>true,
					'autoSize'=>true,
					'dateFormat'=>'dd-mm-yy',
					'defaultDate'=>+0,
				),
			));
		?>
		<?php echo $form->error($model,'fecha_emision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vencimiento_orden'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'vencimiento_orden',
				'value'=>$model->vencimiento_orden,
				// additional javascript options for the date picker plugin
				'options'=>array(
				'showAnim'=>'fold',
				'showButtonPanel'=>true,
				'autoSize'=>true,
				'dateFormat'=>'dd-mm-yy',
				'defaultDate'=>$model->vencimiento_orden,
				),
			));
		?>
		<?php echo $form->error($model,'vencimiento_orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'prioridad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_orden_servicio'); ?>
		<?php echo $form->textField($model,'observaciones_orden_servicio',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'observaciones_orden_servicio'); ?>
	</div>	

	

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cierre'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_cierre',
				'value'=>$model->fecha_cierre,
				// additional javascript options for the date picker plugin
				'options'=>array(
				'showAnim'=>'fold',
				'showButtonPanel'=>true,
				'autoSize'=>true,
				'dateFormat'=>'dd-mm-yy',
				'defaultDate'=>$model->fecha_cierre,
				),
			));
		?>
		<?php echo $form->error($model,'fecha_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importe'); ?>
		<?php echo $form->textField($model,'importe'); ?>
		<?php echo $form->error($model,'importe'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'sistema_alarmas_sistema_alarma_id'); ?>
		<?php echo $form->textField($model,'sistema_alarmas_sistema_alarma_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sistema_alarmas_sistema_alarma_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->