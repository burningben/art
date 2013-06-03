<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="KEYWords" content="暨南大学学生艺术团 暨南大学艺术团 暨大艺术团 土风舞"/>
	<meta name='description' content='暨南大学学生艺术团'/>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
	<link  rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base-common.css" />

</head>

<body>
	<div id="top"> 
		<ul>
			<li id="top_logo">
					<a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/site/index" title="暨南大学学生艺术团">
						<img alt='暨南大学学生艺术团' width='150' height='45' src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/logo.png" alt="暨南大学学生艺术团logo" />
					</a>
			</li>
			<li id="top_title">暨南大学学生艺术团
			</li>
			<li id="top_link">
			</li>
		</ul>

	</div>
		<?php echo $content; ?>

	<div id="bottom">
		<p>CopyRight © 2013 暨南大学学生艺术团 All Right Reserved.</p>
	</div>
<!-- 
<div class="container" id="page">


	<div id="mainmenu">-->
		<?php
/*		 $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'主页', 'url'=>array('/site/index')),
				array('label'=>'新闻', 'url'=>array('/adminInfoNews/index')),
				array('label'=>'简介', 'url'=>array('/adminInfoIntro/index')),
				array('label'=>'通知公告', 'url'=>array('/infoNotice/index')),
				array('label'=>'登录', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'登出 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
*/		?>
<!--	</div>







</div>
 -->


</body>
</html>
