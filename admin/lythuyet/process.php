<?php
include_once '../../config/config.php';
include_once '../../core/database.php';
include_once '../../model/lythuyet.php';
include_once '../../helper/simple_html_dom.php';

$action = $_REQUEST['processname'];

if($action=='insert'){

    $uploadSuccess = 0;
    if(!empty($_FILES['img_thumbnail']['name'])) {
        $target_dir = "../../resource/images/";
        $target_filename = basename($_FILES["img_thumbnail"]["name"]);
        $target_file = $target_dir . $target_filename;

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        $check = getimagesize($_FILES["img_thumbnail"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            // echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["img_thumbnail"]["tmp_name"], $target_file)) {
                $uploadSuccess = 1;
            }
        }
    }

    $arrInsert = array();
    $title = $_POST['title'];
    $img_thumbnail = '';
    if($uploadSuccess==1) {
        $img_thumbnail = $target_filename;
    }
    $summary = $_POST['summary'];

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

    $arrInsert['title'] = $title;
    $arrInsert['img_thumbnail'] = $img_thumbnail;
    $arrInsert['summary'] = $summary;
    $arrInsert['content'] = $content;
    $arrInsert['date_change'] = date('Y-m-d');
    $oLythuyet = new Lythuyet();
    $oLythuyet->insert($arrInsert);
    header('Location: '.$base_url.'admin/lythuyet/');
    die();
}

if($action=='update'){

    $uploadSuccess = 0;
    if(!empty($_FILES['img_thumbnail']['name'])) {
        $target_dir = "../../resource/images/";
        $target_filename = basename($_FILES["img_thumbnail"]["name"]);
        $target_file = $target_dir . $target_filename;

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        $check = getimagesize($_FILES["img_thumbnail"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            // echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["img_thumbnail"]["tmp_name"], $target_file)) {
                $uploadSuccess = 1;
            }
        }
    }

    $arrUpdate = array();
    $title = $_POST['title'];
    $img_thumbnail = '';
    $id = $_POST['id'];
    if($uploadSuccess==1) {
        $img_thumbnail = $target_filename;
    }

    $summary = $_POST['summary'];

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


    $arrUpdate['id'] = $id;
    $arrUpdate['title'] = $title;
    $arrUpdate['img_thumbnail'] = $img_thumbnail;
    $arrUpdate['summary'] = $summary;
    $arrUpdate['content'] = $content;
    $arrUpdate['date_change'] = date('Y-m-d');
    $oLythuyet = new Lythuyet();
    $oLythuyet->update($arrUpdate);
    header('Location: '.$base_url.'admin/lythuyet/');
    die();
}

if($action=='delete'){
    $id = $_REQUEST['id'];
    $oLythuyet = new Lythuyet();
    $lythuyet = $oLythuyet->getById($id);
    $row = $lythuyet->fetch_assoc();
    $target_file = empty($row['img_thumbnail']) ? false : $row['img_thumbnail'];
    if($target_file!==false){
        $target_file = '../../resource/images/'.$target_file;
        unlink($target_file);
    }
    $oLythuyet->delete($id);
    header('Location: '.$base_url."admin/lythuyet");
}