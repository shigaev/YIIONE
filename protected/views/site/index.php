<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>Содержание этой страницы можно изменить, изменив следующие два файла:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>Для получения более подробной информации о том, как далее развивать это приложение, пожалуйста, прочитайте
	<a href="http://www.yiiframework.com/doc/">документацию</a>.
	Если у вас возникнут вопросы не стесняйтесь задавать их на
	<a href="http://www.yiiframework.com/forum/" target="_blank">на форуме</a>
</p>
