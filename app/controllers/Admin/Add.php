<?php
    namespace Admin;
    session_start();

    class Add {
        public function post(){
            $bookcode=$_POST["code"];
            $book=$_POST["book"];
            $check=\Model\Books::check($book);
            if($check[0][0]){
                \Model\Books::quantinc($book);

            }
            else{
            \Model\Books::add($bookcode,$book);
        }
        header("Location:/");
    }
}
  
   