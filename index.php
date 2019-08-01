<?php
	$url='http://mysite.local/?page=1&ref=partner';
	$arr=parse_url($url);
	//print_r($arr);
	//echo '</br>';
	parse_str($arr['query'],$query);
	//print_r($query);
	//echo '</br>';
	$_COOKIE['value']=$query['ref'];
	//echo $query['ref'].'</br>';
	unset($query['ref']);
	//header('Location: http://mysite.local/?page=1');//Redirect
	echo $_COOKIE['value'];
?>