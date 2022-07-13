<?php

namespace Model;

Class Admin{
    public function req(){
        $db = \DB::get_instance();
        $query = "Select * from requested where status='requested'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }
    public function areq(){
        $db = \DB::get_instance();
        $query = "Select * from user where admin=-1";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }
    public function adminapprove($user,$aprove){
        $db = \DB::get_instance();
        if($aprove){
            $query = "update user set admin=1 where Name='".$user."'";
        }
        else{
            $query = "update user set admin=0 where Name='".$user."'";
        }
        $stmt = $db->prepare($query);
        $stmt->execute();
        header("Location:/areq");
    }
    public function issued(){
        $db = \DB::get_instance();
        $query="Select * from issued";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }
    public function avail(){
        $db = \DB::get_instance();
        $query="Select * from books where quantity>0";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }
}
