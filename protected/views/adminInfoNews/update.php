<?php
/* @var $this InfoNewsController */
/* @var $model InfoNews */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'编辑',
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'创建新闻', 'url'=>array('create')),
	array('label'=>'编辑新闻', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'浏览新闻', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'删除新闻', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'亲，你确定要删除这条新闻吗?')),
	array('label'=>'管理新闻', 'url'=>array('admin')),
);
?>

<h1>Update InfoNews <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>