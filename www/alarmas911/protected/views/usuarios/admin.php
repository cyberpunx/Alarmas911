<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'Listar Todos', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Listar Clientes Factura A', 'url'=>array('listClientes')),
	array('label'=>'Listar Saldos', 'url'=>array('ListSaldo')),
	array('label'=>'Listar Deudores', 'url'=>array('listSaldoDeuda')),
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

<h1>Administrar Usuarios</h1>

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
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
			'header' => 'Acciones',
			'template'=>'{view}{update}{estadoCuenta}{verSistemas}',
			 'buttons'=>array(
			 	'view' => array(
					'imageUrl'=>Yii::app()->request->baseUrl.'/themes/shadow_dancer/images/small_icons/magnifier.png',
				),
				'update' => array(
					'imageUrl'=>Yii::app()->request->baseUrl.'/themes/shadow_dancer/images/small_icons/pencil.png',
				),
				'estadoCuenta' => array(
					'label'=>'Ver Estado Contable',
					'imageUrl'=>Yii::app()->request->baseUrl.'/themes/shadow_dancer/images/small_icons/money.png',
					'url'=>'Yii::app()->createUrl("usuarios/estadoCuenta", array("id"=>$data->usuario_id))',
				),
				'verSistemas' => array(
					'label'=>'Ver Sistemas de Alarmas',
					'imageUrl'=>Yii::app()->request->baseUrl.'/themes/shadow_dancer/images/small_icons/bell.png',
					'url'=>'Yii::app()->createUrl("sistemaAlarmas/admin", array("usuarios_usuario_id"=>$data->usuario_id))',
				),
			),
		),
	),
)); ?>
