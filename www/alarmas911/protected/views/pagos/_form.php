<?php
/* @var $this PagosController */
/* @var $model Pagos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
        <?php echo $form->labelEx($model,'usuarios_usuario_id'); ?>
        <?php
            $this->widget('EJuiAutoCompleteFkField', array(
                'model'=>$model, 
                'attribute'=>'usuarios_usuario_id',
                'sourceUrl'=>Yii::app()->createUrl('pagos/FindUsuario'), 
                'showFKField'=>true,
                'FKFieldSize'=>1, 
                'relName'=>'usuarios', 
                'displayAttr'=>'FullNameDniAddress', 
                'autoCompleteLength'=>60,
                'htmlOptions'=>array('size'=>50,'placeholder'=>'Ingresar nombre del usuario'),
                'options'=>array(
                    'minLength'=>0, 
                ),
            ));
        ?>
        <?php echo $form->error($model,'usuarios_usuario_id'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'importe'); ?>
		<?php echo $form->textField($model,'importe'); ?>
		<?php echo $form->error($model,'importe'); ?>
	</div>

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'ordenes_servicio_orden_servicio_id'); ?>
		<?php echo $form->textField($model,'ordenes_servicio_orden_servicio_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ordenes_servicio_orden_servicio_id'); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha',
				'value'=>$model->fecha,
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
		<?php echo $form->error($model,'fecha_emision'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'tipos_pago_tipo_pago_id'); ?>
	<?php
		$tiposPago_list = CHtml::listData(TiposPago::model()->findAll(), 'tipo_pago_id', 'nombre_tipo_pago');
		$options = array(
		        'tabindex' => '1',
		);
	?>
	<?php echo $form->dropDownList($model,'tipos_pago_tipo_pago_id', $tiposPago_list, $options); ?>
	<?php echo $form->error($model,'tipos_pago_tipo_pago_id'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'informacion_pago'); ?>
		<?php echo $form->textField($model,'informacion_pago',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'informacion_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->