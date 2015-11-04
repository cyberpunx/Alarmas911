<?php
/* @var $this OrdenesServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('admin'),
	'Generar cobro mensual',
);

$this->menu=array(
	array('label'=>'Crear Ordenes de Servicio', 'url'=>array('create')),
	array('label'=>'Administrar Ordenes de Servicio', 'url'=>array('admin')),
);
?>

<h1>Ordenes Servicios - Cobro Mensual por Monitoreo</h1>

<?php 

	if (isset($_GET['confirm'])){
		$model = new OrdenesServicio();
		echo $model->generarCobrosMensuales(isset($_GET['confirm']));	
		echo CHtml::button('Volver', array('submit' => array('ordenesServicio/admin'), 'button class' => 'button grey', ));
	}else{
		$model = new OrdenesServicio();
		echo $model->generarCobrosMensuales(isset($_GET['confirm']));
		echo "<br>";
		echo CHtml::button('Volver', array('submit' => array('ordenesServicio/admin'), 'button class' => 'button grey', ));
		echo CHtml::button('Generar', array('submit' => array('ordenesServicio/GenerarCobroMensual', 'confirm'=>''), 'button class' => 'button green', ));	
	}
	
?>