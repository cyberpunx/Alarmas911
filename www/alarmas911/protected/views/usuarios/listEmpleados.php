<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	//'Usuarios'=>array('admin'),
	'Administrar Empleados',
);

$this->menu=array(
	//array('label'=>'Listar Todos', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
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

<h1>Administrar Usuarios Empleados</h1>

<p>

Opcionalmente, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$modelSearch->searchListEmpleados(),
	'filter'=>$modelSearch,
	'columns'=>array(
		array(
			'header' => 'Nombre y Apellido',
			'name' => 'fullName',
			'value' => '$data->getFullName()',
		),
		//'usuario_id',
		//'nombre',
		//'apellido',
		//'email',
		//array(
		//	'name'=>'email',
		//	'value'=>function($data) {
		//		if(strlen($data->email) > 20){
		//			return substr($data->email, 0, 20)."...";
		//		} else {
		//			return $data->email;
		//		}
		//	},
		//),
		//'password',
		//'direccion',		
		//array(
		//	'name'=>'direccion',
		//	'value'=>function($data) {
		//		if(strlen($data->direccion) > 20){
		//			return substr($data->direccion, 0, 20)."...";
		//		} else {
		//			return $data->direccion;
		//		}
		//	},
		//),
		//'dni',
		'telefono_celular',
		//'telefono_fijo',
		//'telefono_alt',
		//'rol',
		//'comentarios',
		
		'empleado_funcion',
		array(
			'name'=>'empleado_temporal',
			'value'=>function($data) {
				if($data->empleado_temporal == 1){
					return "Si";
				} else {
					return "No";
				}
			},
			'htmlOptions' => array('width' => 10),
		),
		//'empleado_temporal',
		//'empleado_activo',
		array(
			'name'=>'empleado_activo',
			'value'=>function($data) {
				if($data->empleado_activo == 1){
					return "Si";
				} else {
					return "No";
				}
			},
			'htmlOptions' => array('width' => 30),
		),
		//'cliente_direccion_cobro',
		//'cliente_sistema_secundario_id',
		//'cliente_factura',
		//'cliente_razon_social',
		//'cliente_cuit',
		//'tipos_cliente_tipo_cliente_id',
		array(
			'name'=>'comentarios',
			'value'=>function($data) {
				if(strlen($data->comentarios) > 40){
					return substr($data->comentarios, 0, 40)."...";
				} else {
					return $data->comentarios;
				}
			},
			'htmlOptions' => array('width' => 200),
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
