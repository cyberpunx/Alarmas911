
<div style="margin-bottom: 20px; display: <?php echo!empty($display) ? $display : 'none'; ?>; width:100%; clear:left;" class="crow">





    <div class="row" style="width:200px;float: left;">
    <?php echo CHtml::activelabelEx($model, '[' . $index . ']tipos_sensores_tipo_sensor_id'); ?>
    <?php
        $tipoSensores_list = CHtml::listData(TiposSensores::model()->findAll(), 'tipo_sensor_id', 'nombre_sensor');
        $options = array(
                'tabindex' => '0',
                'empty' => '(not set)',
        );
    ?>
    <?php echo CHtml::activeDropDownList($model, '[' . $index . ']tipos_sensores_tipo_sensor_id', $tipoSensores_list, $options); ?>
    <?php echo CHtml::error($model, '[' . $index . ']tipos_sensores_tipo_sensor_id'); ?>
    </div>
   
    <div class="row" style="width:200px;float: left;">
    <?php echo CHtml::activelabelEx($model, '[' . $index . ']modelos_modelo_id'); ?>
    <?php
        $modelos_list = CHtml::listData(Modelos::model()->findAll(array("condition"=>"discriminante = 'SEN' ")), 'modelo_id', 'ModeloMarca');
        $options = array(
                'tabindex' => '0',
                'empty' => '(not set)',
        );
    ?>
    <?php echo CHtml::activeDropDownList($model, '[' . $index . ']modelos_modelo_id', $modelos_list, $options); ?>
    <?php echo CHtml::error($model, '[' . $index . ']modelos_modelo_id'); ?>
    </div>

</div>
 
<?php
Yii::app()->clientScript->registerScript('deleteChild', "
function deleteChild(elm, index)
{
    element=$(elm).parent().parent();
    /* animate div */
    $(element).animate(
    {
        opacity: 0.25, 
        left: '+=50', 
        height: 'toggle'
    }, 500,
    function() {
        /* remove div */
        $(element).remove();
    });
}", CClientScript::POS_END);