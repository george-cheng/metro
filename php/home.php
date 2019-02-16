<?php
header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
//$url = dirname('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
$url = 'http://www.berrylollipop.com/metro/php';
$meteroimg = '/meteroimg/';
$banner = 'banner/';
$nav = 'nav/';
$recommend = 'recommend/';

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
        'id'=> 1,
        'picUrl'=> $url.$meteroimg.$nav.'1.jpg'
    ),
    array(
        'id'=> 2,
        'picUrl'=> $url.$meteroimg.$nav.'2.jpg'
    ),
    array(
        'id'=> 3,
        'picUrl'=> $url.$meteroimg.$nav.'3.jpg'
    ),
    array(
        'id'=> 4,
        'picUrl'=> $url.$meteroimg.$nav.'4.jpg'
    ),
    array(
        'id'=> 5,
        'picUrl'=> $url.$meteroimg.$nav.'5.jpg'
    ),
    array(
        'id'=> 6,
        'picUrl'=> $url.$meteroimg.$nav.'6.jpg'
    ),
    array(
        'id'=> 7,
        'picUrl'=> $url.$meteroimg.$nav.'7.jpg'
    ),
    array(
        'id'=> 8,
        'picUrl'=> $url.$meteroimg.$nav.'8.jpg'
    )
);

$recommend = array(
    array(
        'id'=> 1,
        'picUrl'=> $url.$meteroimg.$recommend.'1.jpg'
    ),
    array(
        'id'=> 2,
        'picUrl'=> $url.$meteroimg.$recommend.'2.jpg'
    ),
    array(
        'id'=> 3,
        'picUrl'=> $url.$meteroimg.$recommend.'3.jpg'
    ),
    array(
        'id'=> 4,
        'picUrl'=> $url.$meteroimg.$recommend.'4.jpg'
    ),
    array(
        'id'=> 5,
        'picUrl'=> $url.$meteroimg.$recommend.'5.jpg'
    ),
    array(
        'id'=> 6,
        'picUrl'=> $url.$meteroimg.$recommend.'6.jpg'
    )
);

$param = isset($_GET['title']) ? $_GET['title'] : 'banner';
switch ($param) {

    case 'banner':
        echo json_encode($data);
        break;
    case 'menu':
        echo json_encode($menu);
        break;
    case 'recommend':
        echo json_encode($recommend);
        break;

}

//echoData($param);
