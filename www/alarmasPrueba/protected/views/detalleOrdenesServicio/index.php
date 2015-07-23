<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Ordenes Servicios',
);

$this->menu=array(
	array('label'=>'Create DetalleOrdenesServicio', 'url'=>array('create')),
	array('label'=>'Manage DetalleOrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>Detalle Ordenes Servicios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
