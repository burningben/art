<?php
/* @var $this UserController */
/* @var $model MngUserMain */

$this->breadcrumbs=array(
	'Mng User Mains'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MngUserMain', 'url'=>array('index')),
	array('label'=>'Create MngUserMain', 'url'=>array('create')),
	array('label'=>'Update MngUserMain', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MngUserMain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MngUserMain', 'url'=>array('admin')),
);
?>

<h1>View MngUserMain #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		'password',
		'create_time',
	),
)); ?>
