<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	$model->usuarios->FullName=>array('usuarios/view','id'=>$model->usuarios->usuario_id),
	'Sistema Alarmas'=>array('admin'),
	$model->nombre_sistema_alarma,
);

$this->menu=array(
	//array('label'=>'Listar Sistemas', 'url'=>array('index')),
	array('label'=>'Crear Sistema de Alarma', 'url'=>array('create')),
	array('label'=>'Actualizar Sistema de Alarma', 'url'=>array('update', 'id'=>$model->sistema_alarma_id)),
	//array('label'=>'Borrar Sistema', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sistema_alarma_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Sistemas de Alarmas', 'url'=>array('admin')),
);
?>

<h1>Ver Sistema de Alarmas / <?php echo $model->nombre_sistema_alarma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sistema_alarma_id',
		array(
			'label' => 'Cliente',
			'value' => CHtml::link($model->usuarios->FullName, '?r=usuarios/view&id='.$model->usuarios->usuario_id),
			'type' => 'raw',
		),
		'direccion_sistema_alarma',
		'observaciones_sistema_alarma',
		array(
			'label' => 'Modelo',
			'value' => $model->modelos->nombre_modelo
		),
		array(
			'label' => 'Dirección',
			'value' => $model->direccion_sistema_alarma
		),
		array(
			'label' => 'Barrio',
			'value' => $model->barrios->nombre_barrio
		),
		array(
			'label' => 'Tipo de Monitoreo',
			'value' => $model->tiposMonitoreo->nombre_tipo_monitoreo
		),
		array(
			'label' => 'Activo',
			'value' => function($model) {
				if($model->activo_sistema_alarma == 1 ){
					return "Si";
				} else {
					return "No";
				}
			}, 
		),
		'nombre_sistema_alarma',
		array(
			'name'=>'Zonas',
			'type'=>'html',
			'value'=>$model->relatedZonas,
		),
		array(
			'name'=>'Paneles',
			'type'=>'html',
			'value'=>$model->relatedPaneles,
		),
		array(
			'name'=>'Accesorios',
			'type'=>'html',
			'value'=>$model->relatedAccesorios,
		),
		array(
			'name'=>'Baterias',
			'type'=>'html',
			'value'=>$model->relatedBaterias,
		),
	),
)); ?>



<br>

<div class="button_list">
	<ul>
	</ul>
	<ul>
	</ul>
	<ul>
	</ul>
	<ul>
	</ul>
	<ul>
		<li>
			<a class="grey" href="index.php?r=paneles/createFromSistemas&id=<?php echo $model->sistema_alarma_id?>">
				<span class="icon icon-add">Agregar Paneles</span>
			</a>
		</li>
		<li>
			<a class="grey" href="index.php?r=accesorios/createFromSistemas&id=<?php echo $model->sistema_alarma_id?>">
				<span class="icon icon-add">Agregar Accesorios</span>
			</a>
		</li>
		<li>
			<a class="grey" href="index.php?r=baterias/createFromSistemas&id=<?php echo $model->sistema_alarma_id?>">
				<span class="icon icon-add">Agregar Batería</span>
			</a>
		</li>
		<li>
			<a class="grey" href="index.php?r=zonas/createFromSistemas&id=<?php echo $model->sistema_alarma_id?>">
				<span class="icon icon-add">Agregar Zona</span>
			</a>
		</li>	
	<br style="clear:left">
</div>

