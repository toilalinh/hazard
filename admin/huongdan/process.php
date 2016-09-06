<?php
include_once '../../config/config.php';
include_once '../../core/database.php';
include_once '../../model/huongdan.php';
include_once '../../helper/simple_html_dom.php';

$action = $_POST['processname'];
$oHuongdan = new Huongdan();

$content = $_POST['content'];

$html = str_get_html($content);
$aImg = $html->find('img');

foreach($aImg as $img){
    $img_src = $img->src;

    $matches = array();
    $is_base64_str = preg_match('/data:([^;]*);base64,(.*)/', $img_src, $matches);
    if($is_base64_str==0){
        continue;
    }
    $file_extension = str_replace('image/','',$matches[1]);
    $curr_date = date('Y-m-d');
    $original_str = 'ngayth_angXYZmthfd_hsghazard'.$curr_date;
    $file_name = str_shuffle($original_str).'.'.$file_extension;
    $base64_str = $matches[2];
    $data = base64_decode($base64_str);
    file_put_contents('../../resource/images/'.$file_name, $data);
    $img->src = $base_url.'resource/images/'.$file_name;
}

$content = addslashes($html);

if($action == 'insert'){

    $arrInsert = array(
        'title'=>$_POST['title'],
        'content'=>$content
    );

    $oHuongdan->insert($arrInsert);
    header('Location: '.$base_url.'admin/huongdan');
    die();
}

if($action == 'update'){

    $id = $_POST['id'];
    $arrUpdate = array(
        'id'=>$id,
        'title'=>$_POST['title'],
        'content'=>$content
    );

    $oHuongdan->update($arrUpdate);
    header('Location: '.$base_url.'admin/huongdan');
}


