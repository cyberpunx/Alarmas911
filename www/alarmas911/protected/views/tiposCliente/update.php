<?php
/* @var $this TiposClienteController */
/* @var $model TiposCliente */

$this->breadcrumbs=array(
	'Tipos Cliente'=>array('admin'),
	$model->tipo_cliente_id=>array('view','id'=>$model->tipo_cliente_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List TiposCliente', 'url'=>array('index')),
	array('label'=>'Crear Tipo de Cliente', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Cliente', 'url'=>array('view', 'id'=>$model->tipo_cliente_id)),
	array('label'=>'Administrar Tipos de Cliente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Cliente # <?php echo $model->tipo_cliente_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>