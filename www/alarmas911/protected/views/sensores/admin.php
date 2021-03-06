<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	'Sensores'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Sensores', 'url'=>array('index')),
	//array('label'=>'Crear Sensor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sensores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Sensores</h1>

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
	'id'=>'sensores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'sensor_id',

		//'baterias_bateria_id',

		//'tipos_sensores_tipo_sensor_id',
		array(
			//'filter'=>'sistemaAlarmas.nombre_sistema_alarma',
			'name'=>'sistemaAlarmasName',
			'header'=>'Sistema de Alarmas',
			'value'=>'$data->zonas->sistemaAlarmas->nombre_sistema_alarma',
		),
		array(
			//'filter'=>'tiposSensores.nombre_sensor',
			'name'=>'tiposSensoresName',
			'header'=>'Tipo de Sensor',
			'value'=>'$data->tiposSensores->nombre_sensor',
		),
		//'modelos_modelo_id',
		array(
			'name'=>'modeloMarca',
			'header'=>'Modelo',
			'value'=>'$data->modelos->ModeloMarca',
		),

		//'zonas_zona_id',
		array(
			
			'name'=>'zonasName',
			'header'=>'Zona',
			'value'=>'$data->zonas->nombre_zona',
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
