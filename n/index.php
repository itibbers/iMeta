<?php

function err($i){
	//exit($i);
	header('Content-type: application/json;charset=utf-8');
	header('Access-Control-Allow-Origin: *');
	exit(json_encode(array('error'=>$i)));
}

require_once 'mysql.class.php';

if(preg_match('/^(?:I|C|P|L)$/',$_GET['t']))
	require 'n.'.strtolower($_GET['t']).'.php';
else
	echo json_encode("");
