<?php 
	
	$action = isset($_GET['action']) ? $_GET['action'] : false;
	$data_news = array();
	$return = array("data" => array(), "errors" => "");
	$host = "10.15.3.2";
	$username = "username";
	$password = "password";
	$database = "database";

		$news = array(
		'0' => array(
			'news_date'=> "15.10.2020",
			'news_title' => "Акции на размещение баннерного
панно 20% до конца июля",
			'news_link' => "page1.html"
			),
		'1' => array(
			'news_date'=> "10.10.2020",
			'news_title' => "Мы работаем в обычном режиме
с 15 июня!",
			'news_link' => "page2.html"
			),
		'2' => array(
			'news_date'=> "8.10.2020",
			'news_title' => "Как правильно подобрать рекламный канал?",
			'news_link' => "page3.html"
			),
		'3' => array(
			'news_date'=> "15.10.2020",
			'news_title' => "Акции на размещение баннерного
панно 20% до конца июля",
			'news_link' => "page1.html"
			),
		'4' => array(
			'news_date'=> "10.10.2020",
			'news_title' => "Мы работаем в обычном режиме
с 15 июня!",
			'news_link' => "page2.html"
			),
		'5' => array(
			'news_date'=> "8.10.2020",
			'news_title' => "Как правильно подобрать рекламный канал?",
			'news_link' => "page3.html"
			),
		'6' => array(
			'news_date'=> "15.10.2020",
			'news_title' => "Акции на размещение баннерного
панно 20% до конца июля",
			'news_link' => "page1.html"
			),
		'7' => array(
			'news_date'=> "10.10.2020",
			'news_title' => "Мы работаем в обычном режиме
с 15 июня!",
			'news_link' => "page2.html"
			),
		'8' => array(
			'news_date'=> "8.10.2020",
			'news_title' => "Как правильно подобрать рекламный канал?",
			'news_link' => "page3.html"
			),
		'9' => array(
			'news_date'=> "15.10.2020",
			'news_title' => "Акции на размещение баннерного
панно 20% до конца июля",
			'news_link' => "page1.html"
			),
		'10' => array(
			'news_date'=> "10.10.2020",
			'news_title' => "Мы работаем в обычном режиме
с 15 июня!",
			'news_link' => "page2.html"
			),
		'11' => array(
			'news_date'=> "8.10.2020",
			'news_title' => "Как правильно подобрать рекламный канал?",
			'news_link' => "page3.html"
			),
	);


	if($action && $action === "getnews") {
		$db = @new mysqli($host,$username,$password,$database);

		if ($db->connect_errno) {
			$error = "Error connection MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
			$return['data'] = $news;
		} else {

			$select = $db->query("SELECT `news_date`, `news_title`, `news_link` FROM `news` ORDER BY `news_date` DESC LIMIT 10");

			if(is_object($select)){
				while ($row = $select->fetch_assoc()) {
					array_push($return['data'], $row);
				}
				$select->close();
				$db->close();
			} else {
				$error = "select is not object. probably nothing find";
			}

		}

		$return['errors'] = $error;
		echo json_encode($return);

	} else {
		return false;
	}
 