<?
	if(isset ($_POST['title'])) {$title=$_POST['title'];}
	if(isset ($_POST['name'])) {$fio=$_POST['name'];}
	if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}

	if(isset ($_POST['step1'])) {$step1=$_POST['step1'];}
	if(isset ($_POST['step2'])) {$step2=$_POST['step2'];}
	if(isset ($_POST['step3'])) {$step3=$_POST['step3'];}
	if(isset ($_POST['step4'])) {$step4=$_POST['step4'];}

	$to = "mashtalir_sasha@ukr.net"; // Замениь на емаил клиента

	$message = "Форма: $title <br><br>";
	if ( $fio || $phonenum || $step1 || $step2 || $step3 || $step4 ) {
		$message .= ""
			. ( $fio ?" Имя:  $fio <br>" : "")
			. ( $phonenum ?" Телефон:  $phonenum <br><br>" : "")
			. ( $step1  ? " Сколько ребенку лет??: $step1 <br>" : "")
			. ( $step2  ? " Ваш ребенок ранее занимался танцами?: $step2 <br>" : "")
			. ( $step3  ? " Куда бы Вы хотели отправить ребенка на отдых?: $step3 <br>" : "")
			. ( $step4  ? " Какой бюджет на отдых ребенка Вам больше подойдет?: $step4 <br>" : "");
	}

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: no-reply@dance-school.kiev.ua.com"; // Заменить домен на домен клиента

	if (!$title && !$phonenum) {
	} else {
		mail($to,"New lead(summer.dance-school.kiev.ua)",$message,$headers); // Заменить домен на домен клиента
	}
?>