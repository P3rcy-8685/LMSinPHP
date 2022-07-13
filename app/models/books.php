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
        $stmt = $db->prepare($query);
        $stmt->execute();
        $query="Insert into requested values('".$name."','".$user."','requested')";
        $stmt = $db->prepare($query);
        $stmt->execute();
        header("Location:/");
    }
    public function add($bookcode,$book){
        $db = \DB::get_instance();
        $query="Select quantity from books where Book='".$book."'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        if(count($rows)){
            $query="Update books set quantity=quantity+1 where Book='".$book."'";
            $stmt = $db->prepare($query);
            $stmt->execute();
            header("Location:/");

        }
        else{
            $query="Insert into books values(".$bookcode.",'".$book."',1)";
            $stmt = $db->prepare($query);
            $stmt->execute();
            header("Location:/");
        }
    }
    public function approve($book,$by,$approve){
        $db = \DB::get_instance();
        if($approve){
            $query="Delete from requested where name='".$book."' and Issued_by='".$by."'";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $query="Insert into issued values('".$book."','".$by."')";
            $stmt = $db->prepare($query);
            $stmt->execute();
        }
        else{
        $query="Update requested set status='rejected' where name='".$book."' and Issued_by='".$by."'";
        echo $query;
        $stmt = $db->prepare($query);
        $stmt->execute();
        }
        header("Location:/vrequest");
        }
}