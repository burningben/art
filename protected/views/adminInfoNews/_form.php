<?php
/* @var $this InfoNewsController */
/* @var $model InfoNews */
/* @var $form CActiveForm */
?>
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/kindeditor/lang/zh_CN.js"></script>
<?php Yii::app()->getClientScript()->registerCoreScript('jquery');?>
<script type="text/javascript">
	var editor;
	KindEditor.ready(function(K) {
		var options = {
			height : 300,
			width : 700,
			allowFileManager : true,
			extraFileUploadParams : {
				type : 'news',//文件存放目录名称
			},
		};
		editor = K.create('#InfoNews_content',options);
	});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'info-news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

<!-- 列表展示图片地址，目前暂且不用这个功能。
	<div class="row">
		<?php echo $form->labelEx($model,'view_img_src'); ?>
		<?php echo $form->textField($model,'view_img_src',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'view_img_src'); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->radioButtonList($model,'status',array('0'=>'隐藏','1'=>'普通','2'=>'置顶'),array('separator'=>'&nbsp','labelOptions'=>array('style'=>'display:inline;'))); //后面的htmlOptions主要作用是横向显示，简陋下了下?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->