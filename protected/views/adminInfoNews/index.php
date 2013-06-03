<?php
/* @var $this InfoNewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'新闻',
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'创建新闻', 'url'=>array('create')),
	array('label'=>'高级管理', 'url'=>array('admin')),
);
?>

<h1>Info News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
)); ?>
