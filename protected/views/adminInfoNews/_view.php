<?php
/* @var $this InfoNewsController */
/* @var $data InfoNews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php // echo CHtml::encode($data->title); ?>
	<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<!-- <?php echo CHtml::encode($data->content); ?> -->
	<?php echo $data->content; ?>
	<br />

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('view_img_src')); ?>:</b>
	<?php echo CHtml::encode($data->view_img_src); ?>
	<br />
 -->
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php 
		if($data->status>0)
			echo ($data->status>1?'置顶':'普通');
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('like')); ?>:</b>
	<?php echo CHtml::encode($data->like); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view')); ?>:</b>
	<?php echo CHtml::encode($data->view); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>