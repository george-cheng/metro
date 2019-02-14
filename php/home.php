<?php

header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
$title = ['title'];
$url = dirname('http://'.$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
$img = '/meteroimg';

if( !empty($title) ){ // 有值
    switch ($title){
        case 'banner':
            $data = array(
                array(
                    'id'=>1,
                    'title'=>'banner1',
                    'picUrl'=> $url.$img.'/1.png'
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

