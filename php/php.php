<?php

header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');

$url = dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

$img = '/image/';


switch ($title) {
    case 'banner':
        $data = array(
            array(
                'id' => 1,
                'title' => 'banner1',
                'picUrl' => $url . $img . $title . '/1.jpg'
            ),
            array(
                'id' => 2,
                'title' => 'banner2',
                'picUrl' => $url . $img . $title . '/2.jpg'
            ),
            array(
                'id' => 3,
                'title' => 'banner3',
                'picUrl' => $url . $img . $title . '/3.jpg'
            ),
            array(
                'id' => 4,
                'title' => 'banner4',
                'picUrl' => $url . $img . $title . '/4.jpg'
            )
        );

        echo json_encode($data);
        break;
        case 'menu':
            $data = array(
                array(
                    'id' => 1,
                    'title' => 'banner1',
                    'picUrl' => $url . $img . $title . '/1.jpg'
                ),
                array(
                    'id' => 2,
                    'title' => 'banner2',
                    'picUrl' => $url . $img . $title . '/2.jpg'
                ),
                array(
                    'id' => 3,
                    'title' => 'banner3',
                    'picUrl' => $url . $img . $title . '/3.jpg'
                ),
                array(
                    'id' => 4,
                    'title' => 'banner4',
                    'picUrl' => $url . $img . $title . '/4.jpg'
                )
            );

            echo json_encode($data);
            break;
}
















