<?php

header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
//echo $_SERVER['SERVER_NAME'];  域名
//echo $_SERVER['REQUEST_URI'];  路径
$url = dirname('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
$jsonp = $_GET['jsonp'];
$title = $_GET['title'];
$img = '/image/';

if( !empty($title) ){ // 有值
    switch ($title){
        case 'banner':
            $data = array(
                array(
                    'id'=>1,
                    'title'=>'banner1',
                    'picUrl'=> $url.$img.$title.'/1.jpg'
                ),
                array(
                    'id'=>2,
                    'title'=>'banner2',
                    'picUrl'=> $url.$img.$title.'/2.jpg'
                ),
                array(
                    'id'=>3,
                    'title'=>'banner3',
                    'picUrl'=> $url.$img.$title.'/3.jpg'
                ),
                array(
                    'id'=>4,
                    'title'=>'banner4',
                    'picUrl'=> $url.$img.$title.'/4.jpg'
                )
            );

            if( !empty($jsonp) ){  // 没有值 就为空 true
                echo $jsonp.'('.json_encode($data).')';
            }else{
                echo json_encode($data);
            }
            break;
    }
}



// http://47.96.29.109/openPhp/image/banner/1.jpg
// http://47.96.29.109/openPhp/image/banner/2.jpg
// http://47.96.29.109/openPhp/image/banner/3.jpg
// http://47.96.29.109/openPhp/image/banner/4.jpg
















