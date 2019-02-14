<?php
header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
//$url = dirname('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
$url = 'http://www.berrylollipop.com/metro/php';
$meteroimg = '/meteroimg/';
$banner = 'banner/';
$nav = 'nav/';

$data = array(
    array(
        'id'=> 1,
        'picUrl'=> $url.$meteroimg.$banner.'1.jpg'
    ),
    array(
        'id'=> 2,
        'picUrl'=> $url.$meteroimg.$banner.'2.jpg'
    ),
    array(
        'id'=> 3,
        'picUrl'=> $url.$meteroimg.$banner.'3.jpg'
    ),
    array(
        'id'=> 4,
        'picUrl'=> $url.$meteroimg.$banner.'4.jpg'
    ),
    array(
        'id'=> 5,
        'picUrl'=> $url.$meteroimg.$banner.'5.jpg'
    ),
);

$menu = array(
    array(
        'id'=> 4,
        'picUrl'=> $url.$meteroimg.$banner.'1.jpg'
    ),
    array(
        'id'=> 2,
        'picUrl'=> $url.$meteroimg.$banner.'2.jpg'
    ),
    array(
        'id'=> 3,
        'picUrl'=> $url.$meteroimg.$banner.'3.jpg'
    ),
    array(
        'id'=> 4,
        'picUrl'=> $url.$meteroimg.$banner.'4.jpg'
    ),
    array(
        'id'=> 5,
        'picUrl'=> $url.$meteroimg.$banner.'5.jpg'
    ),
);
$param = isset($_GET['param']) ? $_GET['param'] : 'banner';
//echo json_encode($data);
switch ($param) {

    case 'banner':
        echo json_encode($data);
        break;
    case 'menu':
        echo json_encode($menu);
        break;

}

//echoData($param);
/*http://www.berrylollipop.com/metro/php/meteroimg/1.png*/