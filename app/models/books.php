<?php

namespace Model;

Class Books{
    public function book(){
        $db = \DB::get_instance();
        $query = "Select * from books where quantity>0";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }
    public function issue($name,$user){
        $db = \DB::get_instance();
        $query="Update books set quantity=quantity-1 where Book='".$name."'";
        echo $query;
        $stmt = $db->prepare($query);
        $stmt->execute();
        $query="Insert into requested values('".$name."','".$user."','requested')";
        $stmt = $db->prepare($query);
        $stmt->execute();
        header("Location:/");
    }
}