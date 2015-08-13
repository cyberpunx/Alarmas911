<?php
/* @var $this BateriasController */
/* @var $model Baterias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'baterias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

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
	<?php echo $form->labelEx($model,'tipos_baterias_tipo_bateria_id'); ?>
	<?php
		$tiposBateria_Lst = CHtml::listData(TiposBaterias::model()->findAll(), 'tipo_bateria_id', 'nombre');
			$options = array(
			        'tabindex' => '0',
			        'empty' => '(not set)',
			);
	?>
	<?php echo $form->dropDownList($model,'tipos_baterias_tipo_bateria_id', $tiposBateria_Lst, $options); ?>
	<?php echo $form->error($model,'tipos_baterias_tipo_bateria_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_bateria'); ?>
		<?php echo $form->textField($model,'observaciones_bateria',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'observaciones_bateria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vida_util'); ?>
		<?php echo $form->textField($model,'vida_util',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'vida_util'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_alta'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_alta',
				'value'=>$model->fecha_alta,
				// additional javascript options for the date picker plugin
				'options'=>array(
					'showAnim'=>'fold',
					'showButtonPanel'=>true,
					'autoSize'=>true,
					'dateFormat'=>'yy-mm-dd',
					//'defaultDate'=>+0,
				),
				//'htmlOptions'=>array('value'=>date('Y-m-d'))
			));
		?>
		<?php echo $form->error($model,'fecha_alta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->