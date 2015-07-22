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
    <?php echo $form->labelEx($model,'modelos_modelo_id'); ?>
    <?php
    $modelos_list = CHtml::listData(Modelos::model()->findAll(), 'modelo_id', 'nombre_modelo');
    $options = array(
            'tabindex' => '0',
            'empty' => '(not set)',
    );
    ?>
    <?php echo $form->dropDownList($model,'modelos_modelo_id', $modelos_list, $options); ?>
    <?php echo $form->error($model,'modelos_modelo_id'); ?>
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
        <?php echo $form->labelEx($model,'usuarios_usuario_id'); ?>
        <?
            $this->widget('EJuiAutoCompleteFkField', array(
                'model'=>$model, 
                'attribute'=>'usuarios_usuario_id', //the FK field (from CJuiInputWidget)
                // controller method to return the autoComplete data (from CJuiAutoComplete)
                'sourceUrl'=>Yii::app()->createUrl('sistemaAlarmas/FindUsuario'), 
                // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
                'showFKField'=>false,
                // display size of the FK field.  only matters if not hidden.  defaults to 10
                'FKFieldSize'=>15, 
                'relName'=>'usuariosUsuario', // the relation name defined above
                'displayAttr'=>'apellido',  // attribute or pseudo-attribute to display
                // length of the AutoComplete/display field, defaults to 50
                'autoCompleteLength'=>60,
                // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may 
                // also be defined.  read the code and docs for all options
                'options'=>array(
                    // number of characters that must be typed before 
                    // autoCompleter returns a value, defaults to 2
                    'minLength'=>2, 
                ),
            ));
        ?>
        <?php echo $form->error($model,'usuarios_usuario_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->