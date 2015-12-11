<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonas'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Zonas', 'url'=>array('index')),
	array('label'=>'Crear Zona', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#zonas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Zonas</h1>

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
	'id'=>'zonas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'zona_id',
		//'sistema_alarmas_sistema_alarma_id',
		array(
			
			'name'=>'sistemaAlarmasName',
			'header'=>'Sistema de Alarmas',
			'value'=>'$data->sistemaAlarmas->nombre_sistema_alarma',
		),
		'nombre_zona',
		array(
			'name'=>'observaciones_zona',
			'value'=>function($data) {
				if(strlen($data->observaciones_zona) > 20){
					return substr($data->observaciones_zona, 0, 20)."...";
				} else {
					return $data->observaciones_zona;
				}
			},
		),
		// 'observaciones_zona',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
		),
	),
)); ?>
