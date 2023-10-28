<?php
class Connection{
     public $hostname;
    public $username;
    public $password;
    public $dbname;

    public function __construct(){
           $this->hostname='localhost';
           $this->username='root';
           $this->password='';
           $this->dbname='advancetechnology'; 
    }
    public function conn(){
        $connect=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
        return $connect;
    }



}



?>