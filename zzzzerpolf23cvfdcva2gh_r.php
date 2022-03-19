<?php
$host = $_POST["itshost"];
if ($host == "studiya-dizaynov.ru") {
	
		// объявляем работу с сессиями
	session_start();
		// указываем папку, куда будет сохраняться информация сессий
	session_save_path($_SERVER["DOCUMENT_ROOT"]."/log/session");
		// устанавливаем защиту по IP (сессии) не чаще, чем раз в две секунды.
		//if (isset($_SESSION["telecod_ip"])) {
			//$t = ((int)(time()-$_SESSION["telecod_ip"]));
			//if ($t < 3600) die(header('Location: http://studiya-dizaynov.ru/success2.php'));
		//}
	$_SESSION["telecod_ip"]=time();	


	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$pochta = $_POST["mail"];
	$file = $_FILES['userfile'];
	$textar = $_POST["text"];
	$dop = $_POST["dop"];	

	$site = $_POST["site"];
		$type = $_POST["type"];						// вид перехода
		$from = $_POST["from"];						// источник 
		$issearch = $_POST["issearch"];
		$utm_term = $_POST["utm_term"];
		$utm_keyword = $_POST["utm_keyword"];
		$ip_lida = $_POST["ip_lida"];
		$str_perehoda = $_POST["str_perehoda"];
		$url = $_POST["url"];

		
	// - start - убирание спецсимволов - //
		function clean($value = "") {
			$value = trim($value);
			$value = stripslashes($value);
			$value = strip_tags($value);
			$value = htmlspecialchars($value);
			
			return $value;
		}
		$name = clean($name);
		$phone = clean($phone);

	///////////////////////////////////////////////////////////////////////
		if (empty($name)) $name = 'Имя не заполнено';
		if (empty($phone)) $phone = $_POST["phone"];
		if (empty($pochta)) $pochta = '';
		$data = array(
			'name'=>$name,
			'tag'=>'studiya-dizaynov.ru', 
			'phone'=>$phone,
			'email'=>$pochta,
			'site'=>$host,
			'referer'=>$host.$_SESSION['ras_referer'],
			'utm_source'=>$_SESSION['ras_utm_source'],
			'utm_medium'=>$_SESSION['ras_utm_medium'],
			'utm_campaign'=>$_SESSION['ras_utm_campaign'],
			'utm_term'=>$_SESSION['ras_utm_term'],
			'utm_content'=>$_SESSION['ras_utm_content'],
			'responsible'=>'776430',
			'chanel'=>$_SESSION['ras_chanel'],
			'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : '',   
		);

		require_once 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer();
		$mail->CharSet = 'utf-8';

		$email_body =  "<p><h2>НОВАЯ ЗАЯВКА!</h2></p>";
		$email_body = $email_body. "<table border=1 width='100%'>";
		$email_body = $email_body."<tr><td>Номер визита:</td><td>".$roistatVisitId."</td></tr>";
		$email_body = $email_body. "<tr><td width='200px'>Телефон</td><td>".$phone."</td></tr>";
		$email_body = $email_body. "<tr><td>Имя</td><td>".$name."</td></tr>";
		$email_body = $email_body. "<tr><td>Email</td><td>".$pochta."</td></tr>";
		$email_body = $email_body. "<tr><td>Комментарий</td><td>".$textar."</td></tr>";
		$email_body = $email_body. "<tr><td>Форма</td><td>".$dop."</td></tr>";
		$email_body = $email_body. "<tr><td>Сайт</td><td>".$site."</td></tr>";
		$email_body = $email_body. "<tr><td>Вид перехода</td><td>".$type."</td></tr>";
		$email_body = $email_body. "<tr><td>Источник</td><td>".$from."</td></tr>"; 
		$email_body = $email_body. "<tr><td>Ключевое слово</td><td>".$utm_keyword."</td></tr>";
		$email_body = $email_body. "<tr><td>utm_term</td><td>".$utm_term."</td></tr>";
		$email_body = $email_body. "<tr><td>Переход с </td><td>".$issearch."</td></tr>";
		$email_body = $email_body. "<tr><td>IP</td><td>".$ip_lida."</td></tr>";
		$email_body = $email_body. "<tr><td>Точка входа</td><td>".$url."</td></tr></table>";

		// Прикрипление файлов к письму
		if (!empty($file['name'][0])) {
			for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
				$uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
				$filename = $file['name'][$ct];
				if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
					$mail->addAttachment($uploadfile, $filename);
					$rfile[] = "Файл $filename прикреплён";
				} else {
					$rfile[] = "Не удалось прикрепить файл $filename";
				}
			}   
		}

		$mail->isHTML(true);
		$mail->Subject = $title;
		$mail->Body = $body;  		
		

		$mail->From = 'studiya-dizaynov.ru <studia.remontov.hr09@gmail.com>';
		$mail->FromName = 'studiya-dizaynov.ru,';
		$mail->AddAddress('studia.remontov.hr09@gmail.com', 'Заявки' );

		//$mail->AddAddress('ulyamorozova797@gmail.com', 'ANALYTICS' );
		
		$mail->Subject = 'Новая заявка на вакансию!';
		$mail->MsgHTML($email_body);

		if(!isset($hasError)) {
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
				exit;
			} else {
				header('Location: https://studiya-dizaynov.ru/success_r.php'); 
			}
		}
	} else {
		echo 'Приносим извинения, но обращение к файлу напрямую запрещено.';
	}
	
?>