<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Saldo Total',
);

$this->menu=array(
	//array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	//array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
	//array('label'=>'Listar Clientes Factura A', 'url'=>array('listClientes')),
);
?>

<h1>Ver Saldo de Usuarios </h1>


<br><br><br>
<?php 
	$model = new Usuarios();
	echo $model->getBalanceList();	
?>