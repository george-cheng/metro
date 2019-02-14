<?php

header('Access-Control-Allow-Origin:*');

$jsonp = $_GET['callback'];

$arr = array('追梦',18,'男');
echo $jsonp."(".json_encode($arr).")";
// myData($arr)
