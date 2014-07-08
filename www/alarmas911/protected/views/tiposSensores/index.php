<?php
/* @var $this TiposSensoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Sensores',
);

$this->menu=array(
	array('label'=>'Create TiposSensores', 'url'=>array('create')),
	array('label'=>'Manage TiposSensores', 'url'=>array('admin')),
);
?>

<h1>Tipos Sensores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
