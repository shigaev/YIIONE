<?php

class MessageController extends Controller
{
	public $defaultAction = 'hello';

	public function actionHello()
	{
		$theTime = date("D M j G:i:s T Y"); // присваиваем переменной дату
		$this->render('hello', array('time' => $theTime)); /*добавляем к рендеру, который выводит контент на странице представления в нашем случае (views/message)*/
		/**
		 * При вызове render() со вторым параметром, содержащим данные массива, он будет извлекать
		 * значения массива в переменные PHP и сделает эти переменные доступными для
		 * просмотра сценария. Ключами в массиве будут имена переменных, которые будут доступны в массиве
		 * в нашем файле просмотра. Итак, в данном примере, наш ключ массива 'time', значением которого является $theTime,
		 * будет извлечена в переменную с именем $time, которая будет доступна в директории
		 * views. Это один из способов передачи данных от контроллера к виду.
		 */
	}

	public function actionGoodbye()
	{
		$theTime = date("D M j G:i:s T Y");
		$this->render('goodbye', array('time' => $theTime));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}