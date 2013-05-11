<?php
/* @var $this MngUserMainController */
/* @var $model MngUserMain */

$this->breadcrumbs=array(
	'Mng User Mains'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MngUserMain', 'url'=>array('index')),
	array('label'=>'Create MngUserMain', 'url'=>array('create')),
	array('label'=>'View MngUserMain', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MngUserMain', 'url'=>array('admin')),
);
?>

<h1>Update MngUserMain <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>