<?php 
	$price     = $_POST['f7'];
	$site      = $_POST['f1'];
	$month     = $_POST['f8'];
	$old_site  = $_POST['f6'];
	$name      = $_POST['f2'];
	$email     = $_POST['f3'];
	$phone     = $_POST['f4'];

	$subject = "Mobikit.ru, заявка-бриф от ". $name;
	$headers = "Content-Type: text/html; charset=UTF-8\r\n";
	$headers.= "From: Мобильная кухня<no-reply@mobikit.ru>\r\n";
	$message = "<span style='width:150px; display: inline-block; margin: 5px 0;'><b>Имя:</b> </span><span style='font-size: 18px;'>".$name."</span> <br><span style='width:150px; display: inline-block; margin: 5px 0;'><b>Электропочта:</b> </span><span style='font-size: 18px;'>".$email."</span> <br><span style='width:150px; display: inline-block; margin: 5px 0;'><b>Телефон:</b> </span><span style='font-size: 18px;'>".$phone."</span> <br><span style='width:150px; display: inline-block; margin: 5px 0;'><b>Старый сайт:</b> </span><span style='font-size: 18px;'>".$old_site."</span> <br><span style='width:150px; display: inline-block; margin: 5px 0;'><b>Срок:</b> </span><span style='font-size: 18px;'>".$month."</span> <br><span style='width:150px; display: inline-block; margin: 5px 0;'><b>Нужен сайт:</b> </span><span style='font-size: 18px;'>".$site."</span> <br><span style='width:150px; display: inline-block; margin: 5px 0;'><b>Бюджет:</b> </span><span style='font-size: 18px;'>".$price."</span> <br>Удачного дня.";


	 $to = "sales@mobikit.ru"; 
	 $res = mail($to, $subject, $message, $headers );



	if($res){
		echo "Заявка успешно отправлена! Администратор свяжется с Вами в ближайшее время!";
	}
	else
		print 'Error';
