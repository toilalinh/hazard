<?php

class Huongdan{

    public function getAll(){
        $sql = "SELECT * FROM huongdan ORDER BY id DESC";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function getById($id){
        $sql = "SELECT * FROM huongdan WHERE id=$id";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function update($arr){
        $sql = "UPDATE huongdan SET title='".$arr['title']."', content='".$arr['content']."' WHERE id=".$arr['id'];
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function insert($arr){
        $sql = "INSERT INTO huongdan(title,content) VALUES('".$arr['title']."','".$arr['content']."')";
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function getNumRows(){
        $sql = "select count(*) as kq from huongdan";
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