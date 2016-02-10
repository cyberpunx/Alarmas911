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
	array('label'=>'Deshacer último Cobro Mensual', 'url'=>array('rollbackCobroMensual')),
);
?>

<h1>Ordenes Servicios - Cobro Mensual por Monitoreo</h1>

<?php
if(isset($_GET['confirm'])){
	echo '<div class="flash-success">Se han generado Ordenes de Servicio satisfactoriamente para los siguientes Sistemas de Alarmas.</div>';
}else{
	echo '<div class="flash-notice">¿Desea generar los siguientes cobros?</div>';
}
?>

<?php 
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,

	'itemView'=>'_vistaCobroMensual',
	'sortableAttributes'=>array(
	),
	'pager'=>array (
		'pageSize'=>1,
	),
	'id'=>'ajaxListView',
));


// <IMPORTE TOTAL Y AVISO DE FECHA> 
$model = new OrdenesServicio();
echo "<h2>TOTAL: $".$model->getImporteTotalCobrosMensuales()."<h2>";
echo "<h2>Fecha último cobro generado: ";
$date = date($model->getFechaUltimoCobro());
$date = strtotime(date("Y-m-d")) - (strtotime($date));
$dayDiff = floor($date/3600/24);
if ( $dayDiff > 29 ){ //Imprime la fecha en verde si pasaron más de 30 dias del ultimo cobro
	echo "<span style=\"color:green\">".$model->getFechaUltimoCobro()."</span> [hace ".$dayDiff." días]"; 
}else{ //Imprime la fecha en rojo si pasaron menos de 30 dias del ultimo cobro
	echo "<span style=\"color:red\">".$model->getFechaUltimoCobro()."</span> [hace ".$dayDiff." días]"; 
}
echo "<h2>";
// </IMPORTE TOTAL Y AVISO DE FECHA> 




// Botones
if (isset($_GET['confirm'])){
	echo $model->generarCobrosMensuales(isset($_GET['confirm']));
	echo CHtml::button('Volver', array('submit' => array('ordenesServicio/admin'), 'button class' => 'button grey', ));
}else{
	echo "<br>";
	echo CHtml::button('Volver', array('submit' => array('ordenesServicio/admin'), 'button class' => 'button grey', ));
	echo CHtml::button('Generar', array('submit' => array('ordenesServicio/GenerarCobroMensual', 'confirm'=>''), 'button class' => 'button green', ));	
}

?>

