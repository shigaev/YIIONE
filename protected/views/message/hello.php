<?php
/* @var $this MessageController */

$this->breadcrumbs = array(
	'Message' => array('/message'),
	'Hello',
);
?>
<!--<h1>--><?php //echo $this->id . '/' . $this->action->id; ?><!--</h1>-->
<h1>Hello World</h1>
<h4 class="time"><?php echo $time; ?></h4>
<p><?php echo CHtml::link('Goodbye page',array('message/goodbye')); ?></p>

<p>
	Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой"
	для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
	форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных
	изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация
	листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа
	Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</p>
<p>
	Вы можете изменить содержимое этой страницы, изменив файл.<tt><?php echo __FILE__; ?></tt>.
</p>
