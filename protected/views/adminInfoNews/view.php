<?php
/* @var $this InfoNewsController */
/* @var $model InfoNews */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'创建新闻', 'url'=>array('create')),
	array('label'=>'编辑新闻', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除新闻', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'亲，你确定要删除这条新闻吗?')),
	array('label'=>'高级管理', 'url'=>array('admin')),
);
?>

<h1>View InfoNews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		'title',
		'content',
		// 'view_img_src',
		'status',
		'like',
		'view',
		'create_time',
		'update_time',
	),
)); ?>
