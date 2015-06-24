<?
/* COMENTARIOS:
 *
 * Comentado el botón "delete" para evitar problemas y mantener la relación 1 a 1. No nos sirve borrarle el Cliente a una Persona.
*/
?>

<div style="margin-bottom: 20px; display: <?php echo!empty($display) ? $display : 'none'; ?>; width:100%; clear:left;" class="crow">

     <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']sistema_secundario_id'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']sistema_secundario_id', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']sistema_secundario_id'); ?>
    </div>

<!--
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']tipos_cliente_tipo_cliente_id'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']tipos_cliente_tipo_cliente_id', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']tipos_cliente_tipo_cliente_id'); ?>
    </div>
-->



    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']razon_social'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']razon_social', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']razon_social'); ?>
    </div>

    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']cuit'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']cuit', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']cuit'); ?>
    </div>
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']direccion_cobro'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']direccion_cobro', array('size' => 20, 'maxlength' => 255)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']direccion_cobro'); ?>
    </div>
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']factura'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']factura'); ?>
        <?php echo CHtml::error($model, '[' . $index . ']factura'); ?>
    </div>


    <div class="row" style="width:200px;float: left;">
    <?php echo CHtml::activeLabelEx($model,'tipos_cliente_tipo_cliente_id'); ?>
    <?php
        $tipoCliente_lst = CHtml::listData(TiposCliente::model()->findAll(), 'tipo_cliente_id', 'nombre_tipo_cliente');
        $options = array(
            'tabindex' => '0',
        );
    ?>
    <?php echo CHtml::activeDropDownList($model, '[' . $index . ']tipos_cliente_tipo_cliente_id', $tipoCliente_lst, $options); ?>
    <?php echo CHtml::error($model, '[' . $index . ']tipos_cliente_tipo_cliente_id'); ?>
    </div>


<!--
    <div class="row" style="width:100px;float: left;">
        <br />
        <?php echo CHtml::link('Delete', '#', array('onclick' => 'deleteCliente(this, ' . $index . '); return false;'));
        ?>
    </div>
-->
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