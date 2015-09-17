<?php
/* @var $this OrdenesServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Servicios',
);

$this->menu=array(
	array('label'=>'Create OrdenesServicio', 'url'=>array('create')),
	array('label'=>'Manage OrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>Ordenes Servicios - Cobro Mensual por Monitoreo</h1>

<h5>Se han generado Ordenes de Servicio satisfactoriamente para los siguientes Sistemas de Alarmas.</h5>

<?php 
	$model = new OrdenesServicio();
	echo $model->generarCobrosMensuales();	
?>