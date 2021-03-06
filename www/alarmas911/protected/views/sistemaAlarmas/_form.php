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
    'enableAjaxValidation'=>true,
)); ?>

    <p class="note">Campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'usuarios_usuario_id'); ?>
        <?php
            $this->widget('EJuiAutoCompleteFkField', array(
                'model'=>$model, 
                'attribute'=>'usuarios_usuario_id', //the FK field (from CJuiInputWidget)
                // controller method to return the autoComplete data (from CJuiAutoComplete)
                'sourceUrl'=>Yii::app()->createUrl('sistemaAlarmas/FindUsuario'), 
                // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
                'showFKField'=>false,
                // display size of the FK field.  only matters if not hidden.  defaults to 10
                'FKFieldSize'=>1, 
                'relName'=>'usuarios', // the relation name defined above
                'displayAttr'=>'FullNameDniAddress',  // attribute or pseudo-attribute to display
                // length of the AutoComplete/display field, defaults to 50
                'autoCompleteLength'=>60,
                // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may 
                // also be defined.  read the code and docs for all options
                'options'=>array(
                    // number of characters that must be typed before 
                    // autoCompleter returns a value, defaults to 2
                    'minLength'=>0, 
                ),
            ));
        ?>
        <?php echo $form->error($model,'usuarios_usuario_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'nombre_sistema_alarma'); ?>
        <?php echo $form->textField($model,'nombre_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'nombre_sistema_alarma'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'direccion_sistema_alarma'); ?>
        <?php echo $form->textField($model,'direccion_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'direccion_sistema_alarma'); ?>
    </div>

    <div class="row">
    <?php echo $form->labelEx($model,'barrios_barrio_id'); ?>
    <?php
    $barrios_list = CHtml::listData(Barrios::model()->findAll(), 'barrio_id', 'nombre_barrio');
    $options = array(
            'tabindex' => '0',
            'empty' => "-Barrio?-",
    );
    ?>
    <?php echo $form->dropDownList($model,'barrios_barrio_id', $barrios_list, $options); ?>
    <?php echo $form->error($model,'barrios_barrio_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'observaciones_sistema_alarma'); ?>
        <?php echo $form->textField($model,'observaciones_sistema_alarma',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'observaciones_sistema_alarma'); ?>
    </div>

    <div class="row">
    <?php echo $form->labelEx($model,'activo_sistema_alarma'); ?>
    <?php
    $yes_no_list = array(1 => 'Si', 0 => 'No');
    $options = array();
    ?>
    <?php echo $form->dropDownList($model,'activo_sistema_alarma', $yes_no_list, $options); ?>
    <?php echo $form->error($model,'activo_sistema_alarma'); ?>
    </div>

    <div class="row">
    <?php echo $form->labelEx($model,'modelos_modelo_id'); ?>
    <?php
    $modelos_list = CHtml::listData(Modelos::model()->findAll(array("condition"=>"discriminante = 'SIA' ")), 'modelo_id', 'ModeloMarca');
    $options = array(
            'tabindex' => '0',
            'empty' => '(no seleccionado)',
    );
    ?>
    <?php echo $form->dropDownList($model,'modelos_modelo_id', $modelos_list, $options); ?>
    <?php echo $form->error($model,'modelos_modelo_id'); ?>
    </div>

    

    <div class="row">
    <?php echo $form->labelEx($model,'tipos_monitoreo_tipo_monitoreo_id'); ?>
    <?php
    $monitoreos_list = CHtml::listData(TiposMonitoreo::model()->findAll(), 'tipo_monitoreo_id', 'nombre_tipo_monitoreo');
    $options = array(
            'tabindex' => '0',
            'empty' => '(no seleccionado)',
    );
    ?>
    <?php echo $form->dropDownList($model,'tipos_monitoreo_tipo_monitoreo_id', $monitoreos_list, $options); ?>
    <?php echo $form->error($model,'tipos_monitoreo_tipo_monitoreo_id'); ?>
    </div>

    
    <div id="zonas">
        <?php
        $index = 0;
        foreach ($model->zonas as $id => $zonas):
            $this->renderPartial('zonas/_form', array(
                'model' => $zonas,
                'index' => $id,
                'display' => 'block'
            ));
            $index++;
        endforeach;
        ?>
    </div>

    
    <div style="clear:both;"></div>
    <?php
    echo CHtml::link('Agregar Zona', '#', array('id' => 'loadChildByAjax'));
    ?>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->



<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScript('loadchild', '
var _index = ' . $index . ';
$("#loadChildByAjax").click(function(e){
    e.preventDefault();
    var _url = "' . Yii::app()->controller->createUrl("loadChildByAjax", array("load_for" => $this->action->id)) . '&index="+_index;
    $.ajax({
        url: _url,
        success:function(response){
            $("#zonas").append(response);
            $("#zonas .crow").last().animate({
                opacity : 1, 
                left: "+50", 
                height: "toggle"
            });
        }
    });
    _index++;
});
', CClientScript::POS_END);
?>

