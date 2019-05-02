<?php
        $name = $_POST["name"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $company = $_POST ["company"]
		$textarea = $_POST["textarea"];
		
		$from = 'kenkil2@yahoo.com';
        $to = 'kenkil2@yahoo.com';
        $sub = "Форма обратной связи Контакты";
        $message = "Имя: $name\nТелефон: $tel\nEmail: $email\nСообщение: $textarea\ncompany: $company";
        mail ($to,$sub,$message,"Content-type:text/plain; charset = UTF-8\r\nFrom:$from");			            
?>