<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrdenesServicio', 'url'=>array('index')),
	array('label'=>'Manage OrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>Create OrdenesServicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>