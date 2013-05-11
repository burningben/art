<?php
/* @var $this MngUserMainController */
/* @var $model MngUserMain */

$this->breadcrumbs=array(
	'Mng User Mains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MngUserMain', 'url'=>array('index')),
	array('label'=>'Manage MngUserMain', 'url'=>array('admin')),
);
?>

<h1>Create MngUserMain</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>