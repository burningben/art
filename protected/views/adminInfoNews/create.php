<?php
/* @var $this InfoNewsController */
/* @var $model InfoNews */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
	'增加',
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'创建新闻', 'url'=>array('create')),
	array('label'=>'高级管理', 'url'=>array('admin')),
);
?>

<h1>Create InfoNews</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>