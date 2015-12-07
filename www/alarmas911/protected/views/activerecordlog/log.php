<?php
/* @var $this ActiverecordlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historial',
);

$this->menu=array(
	//array('label'=>'List Accesorios', 'url'=>array('index')),
	//array('label'=>'Crear Accesorio', 'url'=>array('create')),
	//array('label'=>'Administrar Accesorios', 'url'=>array('admin')),
);

?>

<h1>Historial</h1>

<div class="datagrid"> 
	<table>
	
		<thead>
			<tr><th>Fecha</th><th>Acción</th><th>Usuario</th><th>Detalle</th><th>Campo</th><th>Viejo valor</th><th>Nuevo Valor</th><th>Ver</th></tr>
		</thead>

		<tbody>
		</tbody>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

	</table>	
</div>	
