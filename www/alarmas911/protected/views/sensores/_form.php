<?php
/* @var $this SensoresController */
/* @var $model Sensores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sensores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <?php echo $form->labelEx($model,'tipos_sensores_tipo_sensor_id'); ?>
    <?php
    $tipoSensor_list = CHtml::listData(TiposSensores::model()->findAll(), 'tipo_sensor_id', 'nombre_sensor');
    $options = array(
            'tabindex' => '0',
            'empty' => '(not set)',
    );
    ?>
    <?php echo $form->dropDownList($model,'tipos_sensores_tipo_sensor_id', $tipoSensor_list, $options); ?>
    <?php echo $form->error($model,'tipos_sensores_tipo_sensor_id'); ?>
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
    <?php echo $form->labelEx($model,'zonas_zona_id'); ?>
    <?php
    $zonas_list = CHtml::listData(Zonas::model()->findAll(array("condition"=>"zona_id = $model->zonas_zona_id")), 'zona_id', 'nombre_zona');
    $options = array(
            'tabindex' => '0',
            'readonly'=> 'true',
    );
    ?>
    <?php echo $form->dropDownList($model,'zonas_zona_id', $zonas_list, $options); ?>
    <?php echo $form->error($model,'zonas_zona_id'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->