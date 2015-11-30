<?php
/* @var $this OrdenesServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes de Servicio',
);

$this->menu=array(
	array('label'=>'Crear Ordenes de Servicio', 'url'=>array('create')),
	array('label'=>'Administrar Ordenes de Servicio', 'url'=>array('admin')),
);
?>

<h1>Ordenes de Servicio - Vista por Barrios</h1>

<?php 

echo CHtml::beginForm(CHtml::normalizeUrl(array('ordenesServicio/vistaImpresion')), 'get', array('id'=>'filter-form'))
    . CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string'))
    . CHtml::submitButton('Buscar barrio', array('name'=>''))
    . CHtml::endForm();

    Yii::app()->clientScript->registerScript('search',
    "var ajaxUpdateTimeout;
    var ajaxRequest;
    $('input#string').keyup(function(){
        ajaxRequest = $(this).serialize();
        clearTimeout(ajaxUpdateTimeout);
        ajaxUpdateTimeout = setTimeout(function () {
            $.fn.yiiListView.update(
	// this is the id of the CListView
	                'ajaxListView',
	                {data: ajaxRequest}
	            )
	        },
	// this is the delay
	        300);
	    });"
	);


$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_vistaImpresion',
	'sortableAttributes'=>array(
		'fecha_emision'=>'Fecha de Emisión',
		'vencimiento_orden'=>'Fecha de Vencimiento',
		'prioridad'=>'Prioridad',
	),
	'id'=>'ajaxListView',
)); ?>

