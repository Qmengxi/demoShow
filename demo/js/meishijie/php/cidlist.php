<?php
	$data =$_POST['data'];
	$key="0736fc3890f5e5bd39b4adda6ab4779f";
	header("Access-Control-Allow-Origin:http://apis.juhe.cn/cook/index?key=".$key."&".$data."&rn=30");
	header('Access-Control-Allow-Methods:POST');
	$url ="http://apis.juhe.cn/cook/index?key=".$key."&".$data."&rn=30";
	$html=file_get_contents($url);
	echo $html;	
?>