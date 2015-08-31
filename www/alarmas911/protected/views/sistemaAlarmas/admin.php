<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema Alarmas'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List SistemaAlarmas', 'url'=>array('index')),
	array('label'=>'Crear Sistema de Alarmas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sistema-alarmas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar  Sistemas de  Alarmas</h1>

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
	'id'=>'sistema-alarmas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'sistema_alarma_id',
		'nombre_sistema_alarma',
		array(
			'header' => 'Usuario',
			'name' => 'nombre_usuario_search',
			'value' => '$data->usuarios->FullName',
		),
		array(
			'header' => 'Barrio',
			'name' => 'nombre_barrio',
			'value' => '$data->barrios->nombre_barrio',
		),
		//'barrios_barrio_id',
		'observaciones_sistema_alarma',
		array(
			'header' => 'Modelo',
			'name' => 'modeloMarca',
			'value' => '$data->modelos->ModeloMarca',
		),
		array(
			'header' => 'Tipo de Monitoreo',
			'name' => 'tipo_monitoreo_search',
			'value' => '$data->tiposMonitoreo->nombre_tipo_monitoreo',
		),
		//'tipos_monitoreo_tipo_monitoreo_id',
		/*
		'usuarios_usuario_id',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view},{update}'
		),
	),
)); ?>
