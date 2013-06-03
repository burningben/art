<?php
/* @var $this InfoNewsController */
/* @var $model InfoNews */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
	'高级管理',
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'创建新闻', 'url'=>array('create')),
	array('label'=>'高级管理', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('info-news-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Info News</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'info-news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		'title',
		'content',
		// 'view_img_src',
		'status',
		'like',
		/*
		'view',
		'create_time',
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
			'header' =>'操作',
			'template'=>'{view}{update}{delete}{top}',
			'buttons'=>array(
			 		'top'=>array(
			 				'label'=>'置顶',
			 				'url'=>'Yii::app()->createUrl("infoNews/top",array("id"=>$data->id))',
			 				'imageUrl'=>Yii::app()->request->baseUrl.'/resources/image/news/top.png',
			 				'click'=>'function(){alert("亲，你确定要将该新闻置顶吗？");}',
			 				// 'options'=>array('class'=>'authCommon'),
			 			)
			 	),
			'htmlOptions'=>array('style'=>'text-align:center;','width'=>'15%'),

		),
	),
)); ?>
