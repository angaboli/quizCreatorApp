<?php
namespace Core\Database;

use \PDO;

class MysqlDatabase extends Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user='root', $db_pass='', $db_host='localhost'){
        $this->$db_name = $db_name;
        $this->$db_pass = $db_pass;
        $this->$db_user = $db_user;
        $this->$db_host = $db_host;
    }

    private function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=survey;host=localhost;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            
        }
        
        return $this->pdo;
    }

    public function query($statment, $class_name = null, $one= false){
        $req = $this->getPDO()->query($statment);
        if (
            strpos($statment, 'UPDATE', 0) ||
            strpos($statment, 'INSERT', 0) ||
            strpos($statment, 'DELETE', 0) 
            
            ) {
                return $req;
            }
            
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ); 
         }else{
             $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
         }
        
        if($one){
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }
        return $datas; 
    }

    public function prepare($statment, $attributes, $class_name = null, $one= false){
        $req = $this->getPDO()->prepare($statment); 
        
        $noFetch = strpos($statment, 'UPDATE', 0)  ||
        strpos($statment, 'INSERT', 0)  ||
        strpos($statment, 'DELETE', 0)  ;

        if($noFetch
            
            
            ) { 
                
                return $req->execute($attributes);

        }        
        $req->execute($attributes);
        
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else{
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one){
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }
        return $datas;

    }
    
    public function lastInsertId(){
        return $this->getPDO()->lastInsertId();
    }


}