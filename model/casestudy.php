<?php

class Casestudy{

    public function getAll(){
        $sql = "SELECT * FROM casestudy ORDER BY id DESC";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function getRecordByPage($curr_page,$limit){
        $sql = "SELECT * FROM casestudy LIMIT ".(($curr_page-1)*$limit).", ".$limit;
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function getById($id){
        $sql = "SELECT * FROM casestudy WHERE id=$id";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function getRelated($id){
        $sql = "SELECT * FROM casestudy WHERE id <> $id limit 0,4";
        $db = new Database();
        $connect = $db->connect();
        if($connect===false){
            return false;
        }
        return $db->get($sql);
    }

    public function update($arr){
        $sql = "UPDATE casestudy SET title='".$arr['title']."', video_url='".$arr['video_url']."', content='".$arr['content']."', summary='".$arr['summary']."', date_change='".$arr['date_change']."' WHERE id=".$arr['id'];
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function insert($arr){
        $sql = "INSERT INTO casestudy(title,video_url,summary,content,date_change) VALUES('".$arr['title']."','".$arr['video_url']."','".$arr['summary']."','".$arr['content']."','".$arr['date_change']."')";
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function delete($id){
        $sql ="DELETE FROM casestudy WHERE id=$id";
        $db = new Database();
        $connect = $db->connect();
        return $connect->query($sql);
    }

    public function getNumRows(){
        $sql = "select count(*) as kq from casestudy";
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