<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->usuario_id=>array('view','id'=>$model->usuario_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Ver usuario ', 'url'=>array('view', 'id'=>$model->usuario_id)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos de usuario <?php echo $model->usuario_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>