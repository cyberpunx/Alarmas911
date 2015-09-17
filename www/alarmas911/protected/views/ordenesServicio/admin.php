<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List OrdenesServicio', 'url'=>array('index')),
	array('label'=>'Crear Ordenes de Servicio', 'url'=>array('create')),
	array('label'=>'Cobrar Monitoreo Mensual', 'url'=>array('GenerarCobroMensual')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ordenes-servicio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Ordenes de Servicios</h1>

<p>
Opcionalmente, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-servicio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'orden_servicio_id',
		'fecha_emision',
		array(
			//'filter'=>'sistemaAlarmas.nombre_sistema_alarma',
			'name'=>'sistemaAlarmasName',
			'header'=>'Sistema de Alarmas',
			'value'=>function($data) {
				if(strlen($data->sistemaAlarmas->nombre_sistema_alarma) > 20){
					return substr($data->sistemaAlarmas->nombre_sistema_alarma, 0, 20)."...";
				} else {
					return $data->sistemaAlarmas->nombre_sistema_alarma;
				}
			},
		),
		//'fecha_cierre',
		
		array(
			//'filter'=>'sistemaAlarmas.nombre_sistema_alarma',
			'name'=>'fecha_cierre',
			'value'=>function($data) {
				if($data->fecha_cierre == "0000-00-00"){
					return "";
				} else {
					return $data->fecha_cierre;
				}
			},
		),
		
		//'vencimiento_orden',
		array(
			//'filter'=>'sistemaAlarmas.nombre_sistema_alarma',
			'name'=>'vencimiento_orden',
			'value'=>function($data) {
				if($data->vencimiento_orden == "0000-00-00"){
					return "";
				} else {
					return $data->vencimiento_orden;
				}
			},
		),
		//'importe',
		array(
			'header' => 'Importe',
			'name' => 'importe',
			'value'=>function($data) {
					if($data->importe)
						return "$".$data->importe;
					else
						return " - ";
					},
		),
		'observaciones_orden_servicio',		
		/*
		'prioridad',
		'sistema_alarmas_sistema_alarma_id',
		*/
		array(
    		'class'=>'CButtonColumn',
    		'template'=>'{update}{view}',
		),
	),
)); ?>
