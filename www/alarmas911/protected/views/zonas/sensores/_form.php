
<div style="margin-bottom: 20px; display: <?php echo!empty($display) ? $display : 'none'; ?>; width:100%; clear:left;" class="crow">
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']baterias_bateria_id'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']baterias_bateria_id', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']baterias_bateria_id'); ?>
    </div>

    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']tipos_sensores_tipo_sensor_id'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']tipos_sensores_tipo_sensor_id', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']tipos_sensores_tipo_sensor_id'); ?>
    </div>

    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']modelos_modelo_id'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']modelos_modelo_id', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']modelos_modelo_id'); ?>
    </div>
 
    <div class="row" style="width:100px;float: left;">
        <br />
        <?php echo CHtml::link('Delete', '#', array('onclick' => 'deleteChild(this, ' . $index . '); return false;'));
        ?>
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