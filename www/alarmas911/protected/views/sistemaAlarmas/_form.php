<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'sistema-alarmas-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'nombre_sistema_alarma'); ?>
        <?php echo $form->textField($model,'nombre_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'nombre_sistema_alarma'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'observaciones_sistema_alarma'); ?>
        <?php echo $form->textField($model,'observaciones_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'observaciones_sistema_alarma'); ?>
    </div>


    <div class="row">
    <?php echo $form->labelEx($model,'modelos_id_modelo'); ?>
    <?php
    $modelos_list = CHtml::listData(Modelos::model()->findAll(), 'id_modelo', 'nombre_modelo');
    $options = array(
            'tabindex' => '0',
            'empty' => '(not set)',
    );
    ?>
    <?php echo $form->dropDownList($model,'modelos_id_modelo', $modelos_list, $options); ?>
    <?php echo $form->error($model,'modelos_id_modelo'); ?>
    </div>

    <div class="row">
    <?php echo $form->labelEx($model,'barrios_barrio_id'); ?>
    <?php
    $barrios_list = CHtml::listData(Barrios::model()->findAll(), 'barrio_id', 'nombre_barrio');
    $options = array(
            'tabindex' => '0',
            'empty' => '(not set)',
    );
    ?>
    <?php echo $form->dropDownList($model,'barrios_barrio_id', $barrios_list, $options); ?>
    <?php echo $form->error($model,'barrios_barrio_id'); ?>
    </div>

    <div class="row">
    <?php echo $form->labelEx($model,'tipos_monitoreo_tipo_monitoreo_id'); ?>
    <?php
    $monitoreos_list = CHtml::listData(TiposMonitoreo::model()->findAll(), 'tipo_monitoreo_id', 'nombre_tipo_monitoreo');
    $options = array(
            'tabindex' => '0',
            'empty' => '(not set)',
    );
    ?>
    <?php echo $form->dropDownList($model,'tipos_monitoreo_tipo_monitoreo_id', $monitoreos_list, $options); ?>
    <?php echo $form->error($model,'tipos_monitoreo_tipo_monitoreo_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'clientes_cliente_id'); ?>
        <?php echo $form->textField($model,'clientes_cliente_id',array('size'=>11,'maxlength'=>11)); ?>
        <?php echo $form->error($model,'clientes_cliente_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->