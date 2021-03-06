<?php
header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
//$url = dirname('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
$url = 'http://www.berrylollipop.com/metro/php';
$meteroimg = '/meteroimg/';
$banner = 'banner/';
$nav = 'nav/';
$recommend = 'recommend/';
$news = 'news/';
$icon = 'icon/';
$trip = 'trip/';

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

$info = array(
    array(
        'id'=>1,
        'picUrl'=>$url.$meteroimg.$news.'1.jpg',
        'info_tit'=>'站务宣传',
        'info_txt'=>'如何赢取大都会APP限量版大红包攻略'
    ),
    array(
        'id'=>2,
        'picUrl'=>$url.$meteroimg.$news.'2.jpg',
        'info_tit'=>'站务宣传',
        'info_txt'=>'[1周年啦!Metro大都会刷吗过闸机]'
    ),
    array(
        'id'=>3,
        'picUrl'=>$url.$meteroimg.$news.'3.jpg',
        'info_tit'=>'站务宣传',
        'info_txt'=>'匆匆又一年,往事不如烟'
    )
);

$trip_icon = array(
    array(
        'id'=>1,
        'picUrl'=>$url.$meteroimg.$icon.$trip.'line.png',
        'trip_tit'=>'线路列表'
    ),
    array(
        'id'=>2,
        'picUrl'=>$url.$meteroimg.$icon.$trip.'station.png',
        'trip_tit'=>'车站信息'
    ),
    array(
        'id'=>3,
        'picUrl'=>$url.$meteroimg.$icon.$trip.'apology.png',
        'trip_tit'=>'致歉信'
    ),
    array(
        'id'=>4,
        'picUrl'=>$url.$meteroimg.$icon.$trip.'toilet.png',
        'trip_tit'=>'卫生间'
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
    case 'info':
        echo json_encode($info);
        break;
    case 'trip_icon':
        echo json_encode($trip_icon);
        break;

}

