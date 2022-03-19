<?php
session_start();
	if (empty($_GET['utm_source'])) {   				// если в гет-запросе утм метки нет
		if (empty($_SESSION['utm_source'])) {   		// если и в сесси утм метки нет
			$utm_source = 'Источник неопределен';  		// перешли или с закладок или введя адрес напрямую
			if (empty($_SESSION['issearch'])) { 
				$ref = $_SERVER['HTTP_REFERER'];
				$yandex = 'yandex';
				$pos = strpos($ref, $yandex);
				$google = 'google';
				$pos2 = strpos($ref, $google);
				$rambler = 'rambler';
				$pos3 = strpos($ref, $rambler);
				$mailru = 'go.mail';
				$pos4 = strpos($ref, $mailru);
				$nigma = 'nigma.ru';
				$pos5 = strpos($ref, $nigma);
				if ($pos !== false) {
					$_SESSION['issearch'] = 'Yandex';
					$_SESSION['type'] = 'SEO';
					$_SESSION['from'] = 'Яндекс СЕО';
				} else if ($pos2 !== false) {
					$_SESSION['issearch'] = 'Google';
					$_SESSION['type'] = 'SEO';
					$_SESSION['from'] = 'Google СЕО';
				} else if ($pos3 !== false) {
					$_SESSION['issearch'] = 'Rambler';
					$_SESSION['type'] = 'SEO';
					$_SESSION['from'] = 'Rambler СЕО';
				} else if ($pos4 !== false) {
					$_SESSION['issearch'] = 'Mail.ru';
					$_SESSION['type'] = 'SEO';
					$_SESSION['from'] = 'Mail.ru СЕО';
				} else if ($pos5 !== false) {
					$_SESSION['issearch'] = 'Nigma';
					$_SESSION['type'] = 'SEO';
					$_SESSION['from'] = 'Nigma СЕО';
				} else {
					if (empty($_SERVER['HTTP_REFERER'])) {
						$_SESSION['issearch'] = ' ';
						$_SESSION['type'] = 'Неопределен';
						$_SESSION['from'] = ' ';
					} else {
						$_SESSION['issearch'] = 'другой сайт';
						$_SESSION['type'] = 'Referral';
						$_SESSION['from'] = $_SERVER['HTTP_REFERER'];
					}	
				}
				$issearch = $_SESSION['issearch'];
			} else {
				$issearch = $_SESSION['issearch'];
			}
		} else {
			$utm_source = $_SESSION['utm_source']; 		// поместили утм метку из сессии в переменную
			$utm_medium = $_SESSION['utm_medium']; 		// поместили утм метку из сессии в переменную
		}
		if (empty ($_SESSION['vhod'])) {
			$_SESSION['vhod']  = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$url = $_SESSION['vhod'];
		} else {
			$url = $_SESSION['vhod'];
		}
		
		$url = $_SESSION['vhod'];
	} else {											// проверка утм источника и посредника
		$utm_source = $_GET['utm_source']; 
		$_SESSION['type'] = 'Реклама';  
		
		if ($utm_source == 'Yandex') {
			$source = 'Яндекс'; 
			$_SESSION['utm_source'] = $source;
			$_SESSION['utm_term'] = $_GET['keyword'];
			$_SESSION['utm_keyword'] = $_GET['utm_term'];
		} else if ($utm_source == 'Google') {
			$source = 'Google'; 
			$_SESSION['utm_source'] = $source;
			$_SESSION['utm_term'] = $_GET['utm_term'];
		$_SESSION['utm_keyword'] = $_GET['keyword'];
		} else if ($utm_source == 'mytarget') {
			$source = 'MyTarget';   
			$_SESSION['utm_source'] = $source;
		} else if ($utm_source == 'VK_target') {
			$source = 'ВК';   
			$_SESSION['utm_source'] = $source;
		} else if ($utm_source == 'Instagram') {
			$source = 'Социальные сети';   
			$_SESSION['utm_source'] = $source;
		} else if ($utm_source == 'instagram') {
			$source = 'Инстаграм';   
			$_SESSION['utm_source'] = $source;
		} else if ($utm_source == 'inst') {
			$source = 'Инстаграм';   
			$_SESSION['utm_source'] = $source;
		} else if ($utm_source == 'sprav') {
			$source = 'Яндекс Справочник';   
			$_SESSION['utm_source'] = $source;
		} else {
			$source = 'Другой источник';	 			// утм источник иной
			$_SESSION['utm_source'] = $source;
		}

		/*if ($utm_source == 'Instagram') {
			$_SESSION['utm_medium'] == ' СОЦ'; 
		}*/

		
		if (empty($_GET['utm_medium'])) {
				$medium = ' '; 
				$_SESSION['utm_medium'] = $medium;
		} else {
			$utm_medium = $_GET['utm_medium'];
			if ($utm_medium == 'cpc') {
				$medium = ' CPC'; 
				$_SESSION['utm_medium'] = $medium;
			} else if ($utm_medium == 'dsk') {
				$medium = ' DSK'; 
				$_SESSION['utm_medium'] = $medium;
			} else if ($utm_medium == 'cpc-mo') {
				$medium = ' СРС МО'; 
				$_SESSION['utm_medium'] = $medium;
			} else if ($utm_medium == 'rsy') {
				$medium = ' РСЯ'; 
				$_SESSION['utm_medium'] = $medium;
			} else if ($utm_medium == 'social') {
				$medium = ' СОЦ'; 
				$_SESSION['utm_medium'] = $medium;
			} else {
				$medium = ' (medium другой)'; 
				$_SESSION['utm_medium'] = $medium;
			}
		}
	$_SESSION['from'] = $_SESSION['utm_source']." ".$_SESSION['utm_medium'];
	$_SESSION['vhod']  = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];   
	$url = $_SESSION['vhod'];
	$metka = $_SESSION['utm_source']." ".$_SESSION['utm_medium'];

	}

	 
if (!empty($_GET['utm_source'])) $utm_source = $_GET['utm_source']; else $utm_source = '';
if (!empty($_GET['utm_medium'])) $utm_medium = $_GET['utm_medium']; else $utm_medium = '';
if (!empty($_GET['utm_campaign'])) $utm_campaign = $_GET['utm_campaign']; else $utm_campaign = '';
if (!empty($_GET['utm_term'])) $utm_term = $_GET['utm_term']; else $utm_term = '';
if (!empty($_GET['utm_content'])) $utm_content = $_GET['utm_content']; else $utm_content = '';
if (!empty($_GET['s'])) $chanel = $_GET['s']; else $chanel = '';
if (!empty($_SERVER['REQUEST_URI'])) $ras_referer = $_SERVER['REQUEST_URI']; else $ras_referer = '';

if (empty($_SESSION['ras_utm_source']))
	$_SESSION['ras_utm_source'] = $utm_source;
if (empty($_SESSION['ras_utm_medium']))
	$_SESSION['ras_utm_medium'] = $utm_medium;
if (empty($_SESSION['ras_utm_campaign']))
	$_SESSION['ras_utm_campaign'] = $utm_campaign;
if (empty($_SESSION['ras_utm_term']))
	$_SESSION['ras_utm_term'] = $utm_term;
if (empty($_SESSION['ras_utm_content']))
	$_SESSION['ras_utm_content'] = $utm_content;
if (empty($_SESSION['ras_chanel']))
	$_SESSION['ras_chanel'] = $chanel;
if (empty($_SESSION['ras_referer']))
	$_SESSION['ras_referer'] = $ras_referer;



// echo $_SERVER['HTTP_REFERER'];
?>