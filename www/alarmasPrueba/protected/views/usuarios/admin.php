<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Todos', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Listar Clientes Factura A', 'url'=>array('listClientes')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Adminstrar Usuarios</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'fullName',
			'value' => '$data->getFullName()',
		),
		//'usuario_id',
		//'nombre',
		//'apellido',
		//'email',
		array(
			'name'=>'email',
			'value'=>function($data) {
				if(strlen($data->email) > 20){
					return substr($data->email, 0, 20)."...";
				} else {
					return $data->email;
				}
			},
		),
		//'password',
		//'direccion',		
		array(
			'name'=>'direccion',
			'value'=>function($data) {
				if(strlen($data->direccion) > 20){
					return substr($data->direccion, 0, 20)."...";
				} else {
					return $data->direccion;
				}
			},
		),
		//'dni',
		'telefono_celular',
		//'telefono_fijo',
		//'telefono_alt',
		//'rol',
		//'comentarios',
		array(
			'name'=>'comentarios',
			'value'=>function($data) {
				if(strlen($data->comentarios) > 20){
					return substr($data->comentarios, 0, 20)."...";
				} else {
					return $data->comentarios;
				}
			},
		),
		//'empleado_funcion',
		//'empleado_temporal',
		//'empleado_activo',
		//'cliente_direccion_cobro',
		//'cliente_sistema_secundario_id',
		//'cliente_factura',
		//'cliente_razon_social',
		//'cliente_cuit',
		//'tipos_cliente_tipo_cliente_id',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{delete}{update}',
		),
	),
)); ?>
