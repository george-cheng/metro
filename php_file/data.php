<?php

header('Access-Control-Allow-Origin:*');

$arr = array(
    array(
        'id'=>1,
        'name'=>'追梦',
        'age'=>18
    ),
    array(
        'id'=>2,
        'name'=>'心艾宝宝',
        'age'=>16
    )
);

echo json_encode($arr);



