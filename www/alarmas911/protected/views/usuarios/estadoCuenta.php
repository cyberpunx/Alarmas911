<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

if(Yii::app()->user->checkAccess('ADMINISTRADOR')){
	$this->breadcrumbs=array(
		'Usuarios'=>array('admin'),
		$model->FullName=>array('view', 'id'=>$model->usuario_id),
	);
}else{
	$this->breadcrumbs=array(
		//'Usuarios'=>array('admin'),
		$model->FullName=>array('viewCliente'),
	);
}



$this->menu=array(
	//array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->usuario_id), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
	//array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
	array('label'=>'Estado de Cuenta', 'url'=>array('estadoCuenta', 'id'=>$model->usuario_id), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
	//array('label'=>'Listar Clientes Factura A', 'url'=>array('listClientes')),
	array('label'=>'Listar Saldos', 'url'=>array('ListSaldo'), 'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
);
?>

<h1>Ver datos de usuario: <?php echo $model->FullName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuario_id',
		'nombre',
		'apellido',
		array(
			'name'=>'Sistemas de Alarmas',
			'type'=>'html',
			'value'=>$model->relatedSistemasAlarmas,
		),
	),
)); ?>


<!-- 
	/*******************/
	/ ESTADO DE CUENTA 	/
	/*******************/

	CSS de la tabla en:
		\themes\shadow_dancer\css\table.css
-->

<br><br><br>
<?php echo $model->estadoContable?>
			
