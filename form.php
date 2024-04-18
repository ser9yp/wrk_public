<?php
	$file_name = "data.json";
	$parent = "";
	
	if($_POST["parent"] !== "")
	{
		echo "WSEMYDACHI";
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$data = "";
		if(is_file($file_name))
		{
			$data = file_get_contents($file_name);
		}
		
		$json_arr = json_decode($data, true);
		
		$json_arr[] = array("fio" => $_REQUEST["fio"]);
		
		file_put_contents($file_name, json_encode($json_arr));
		
		header("Location: index.php"); //Редирект для того что-бы не
		exit();						  //дублировалась отправка формы
	}