<?php

class Lythuyet{

    public function getAll(){
        $sql = "SELECT * FROM lythuyet ORDER BY id DESC";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function getRelated($id){
        $sql = "SELECT * FROM lythuyet WHERE id <> $id limit 0,4";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function getRecordByPage($curr_page,$limit){
    $sql = "SELECT * FROM lythuyet LIMIT ".(($curr_page-1)*$limit).", ".$limit;
    $db = new Database();
    $connect = $db->connect();
    if($connect===false){
        return false;
    }
    return $db->get($sql);
}

    public function getById($id){
        $sql = "SELECT * FROM lythuyet WHERE id=$id";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function update($arr){
        if(strlen($arr['img_thumbnail'])>0){
            $sql = "UPDATE lythuyet SET title='".$arr['title']."',img_thumbnail='".$arr['img_thumbnail']."', summary='".$arr['summary']."', content='".$arr['content']."', date_change='".$arr['date_change']."' WHERE id=".$arr['id'];
        }else{
            $sql = "UPDATE lythuyet SET title='".$arr['title']."', summary='".$arr['summary']."', content='".$arr['content']."', date_change='".$arr['date_change']."' WHERE id=".$arr['id'];
        }
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function insert($arr){
        $sql = "INSERT INTO lythuyet(title,img_thumbnail,summary,content,date_change) VALUES('".$arr['title']."','".$arr['img_thumbnail']."','".$arr['summary']."','".$arr['content']."','".$arr['date_change']."')";
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function delete($id){
        $sql ="DELETE FROM lythuyet WHERE id=$id";
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function getNumRows(){
        $sql = "select count(*) as kq from lythuyet";
        $db = new Database();
        $connect = $db->connect();
        $result = $connect->query($sql);
        if(!$result){
            return 0;
        }
        $row = $result->fetch_assoc();
        return $row['kq'];
    }
}