<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<div style="margin-bottom: 20px; display: <?php echo!empty($display) ? $display : 'none'; ?>; width:100%; clear:left;" class="crow">
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']tipos_cliente_tipo_cliente_id'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']tipos_cliente_tipo_cliente_id', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']tipos_cliente_tipo_cliente_id'); ?>
    </div>
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']cuit'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']cuit'); ?>
        <?php echo CHtml::error($model, '[' . $index . ']cuit'); ?>
    </div>
    <div class="row" style="width:100px;float: left;">
        <br />
        <?php echo CHtml::link('Delete', '#', array('onclick' => 'deleteCliente(this, ' . $index . '); return false;'));
        ?>
    </div>
</div>

<?php
Yii::app()->clientScript->registerScript('deleteCliente', "
function deleteCliente(elm, index)
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

	
