<?php
/* @var $this ClientesPagosFechaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes Pagos Fechas',
);

$this->menu=array(
	array('label'=>'Create ClientesPagosFecha', 'url'=>array('create')),
	array('label'=>'Manage ClientesPagosFecha', 'url'=>array('admin')),
);
?>

<h1>Clientes Pagos Fechas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
