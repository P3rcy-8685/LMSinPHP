<?php

namespace Model;

Class User{
    public static function issued($user){
        $db = \DB::get_instance();
        $query = "Select * from issued where Issued_by='".$user."'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }

    public static function pending($user){
        $db = \DB::get_instance();
        $query = "Select * from requested where Issued_by='".$user."' and status='requested'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }

    public static function reject($user){
        $db = \DB::get_instance();
        $query = "Select name from requested where Issued_by='".$user."' and status='rejected'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }

    public static function update($user){
        $db = \DB::get_instance();
        $query = "Delete from requested where Issued_by='".$user."' and status='rejected'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return NULL;
    }
}

