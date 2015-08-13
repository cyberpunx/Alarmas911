<div style="margin-bottom: 20px; display: <?php echo!empty($display) ? $display : 'none'; ?>; width:100%; clear:left;" class="crow">


<div style="float:left;padding:10px">
<div class="row">
	<?php echo CHtml::activeLabelEx($model,'tipos_servicio_tipo_servicio_id'); ?>
	<?php
	$servicios_Lst = CHtml::listData(TiposServicio::model()->findAll(), 'tipo_servicio_id', 'nombre_tipo_servicio');
	$options = array(
		'tabindex' => '0',
		'empty' => '(not set)',
	);
	?>
	<?php echo CHtml::activeDropDownList($model, '[' . $index . ']tipos_servicio_tipo_servicio_id', $servicios_Lst, $options); ?>
	<?php echo CHtml::error($model, '[' . $index . ']tipos_servicio_tipo_servicio_id'); ?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row" style="float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']descripcion_detalle_orden_servicio'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']descripcion_detalle_orden_servicio', array('size'=>60,'maxlength'=>128)); ?>
        <?php echo CHtml::error($model, '[' . $index . ']descripcion_detalle_orden_servicio'); ?>
    </div>
</div>
    <div class="row" style="float: left;">
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
?>