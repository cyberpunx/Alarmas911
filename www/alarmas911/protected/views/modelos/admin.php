<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Crear Modelo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#modelos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Modelos</h1>

<p>
Opcionalmente, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'modelos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'modelo_id',
		//'marcas_marca_id',
		//'discriminante',
		array(
			'header' => 'Discriminante',
			'name' => 'discriminante',
			'value'=>function($data) {
				switch ($data->discriminante) {
					case "ACC":
						echo "Accesorios";
						break;
					case "BAT":
						echo "Baterías";
						break;
					case "SEN":
						echo "Sensores";
						break;
					case "PAN":
						echo "Paneles";
						break;
					case "SIA":
						echo "Sist. de Alarmas";
						break;
				}
			},
		),
		array(
			'header' => 'Marca',
			'name' => 'nombre_marca',
			'value' => '$data->marcas->nombre_marca',
		),
		'nombre_modelo',
		'observaciones_modelo',
		
		array(
			'class'=>'CButtonColumn',
			'header' => 'Acciones',
			'template'=>'{update}',
		),
	),
)); ?>
