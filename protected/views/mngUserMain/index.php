<?php
/* @var $this MngUserMainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mng User Mains',
);

$this->menu=array(
	array('label'=>'Create MngUserMain', 'url'=>array('create')),
	array('label'=>'Manage MngUserMain', 'url'=>array('admin')),
);
?>

<h1>Mng User Mains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
