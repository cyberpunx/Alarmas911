

<div style="margin-bottom: 20px; display: <?php echo!empty($display) ? $display : 'none'; ?>; width:100%; clear:left;" class="crow">
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']nombre_zona'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']nombre_zona', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']nombre_zona'); ?>
    </div>
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']observaciones_zona'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']observaciones_zona', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']observaciones_zona'); ?>
    </div>
    <div class="row" style="width:100px;float: left;">
        <br />
        <?php echo CHtml::link('Borrar', '#', array('onclick' => 'deleteChild(this, ' . $index . '); return false;'));
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