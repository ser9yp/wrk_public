<?php
	$fio = htmlentities($_POST["fio"]);
	$output = "
		<html>
			<head>
				<title>Отображение заполненных данных</title>
			</head>
			<body>
				Ваше ФИО: $fio <br />;
			</body>
		</html>"
	echo $output;
?>