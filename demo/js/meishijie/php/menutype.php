<?php
	$key="0736fc3890f5e5bd39b4adda6ab4779f";
	header("Access-Control-Allow-Origin:http://apis.juhe.cn/cook/category?key=".$key);
	header('Access-Control-Allow-Methods:POST');
	$url ="http://apis.juhe.cn/cook/category?key=".$key;
	$html=file_get_contents($url);
	echo $html;	
?>