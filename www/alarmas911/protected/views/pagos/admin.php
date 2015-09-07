<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagos'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Pagos', 'url'=>array('index')),
	array('label'=>'Crear un Pago', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pagos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar  Pagos</h1>

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
	'id'=>'pagos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'pago_id',
		//'usuarios_usuario_id',
		'fecha',
		array(
			'header' => 'Nombre y Apellido',
			'name' => 'nombre_usuario_search',
			'value' => '$data->usuarios->FullName',
		),
		//'importe',
		array(
			'header' => 'Importe',
			'name' => 'importe',
			'value'=>function($data) {
						return "$".$data->importe;
					},
		),
		array(
			'header' => 'Tipo de Pago',
			'name' => 'nombre_tipo_pago',
			'value' => '$data->tiposPago->nombre_tipo_pago',
		),
		//'ordenes_servicio_orden_servicio_id',
		
		//'tipos_pago_tipo_pago_id',
		
		/*
		'informacion_pago',
		*/
		array(
			'class'=>'CButtonColumn',
			'header' => 'Acciones',
			'template'=>'{view}{update}',
			 'buttons'=>array(
			 	'view' => array(
					'imageUrl'=>Yii::app()->request->baseUrl.'/themes/shadow_dancer/images/small_icons/magnifier.png',
				),
				'update' => array(
					'imageUrl'=>Yii::app()->request->baseUrl.'/themes/shadow_dancer/images/small_icons/pencil.png',
				),
			),
		),
	),
)); ?>
