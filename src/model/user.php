<?php
include_once("../conexion_singleton/singleton.php");

class User{
    private $name_user;
    private $pass;   
    private $status;    
    

    public function __construct(){         
    }      

    public function insert($name_user, $pass, $status){ 
        $db= Singleton::getConnect();
        $this->$name_user=$name_user;
        $this->$pass=$pass;
        $this->$status=$status;        

        $sql="INSERT INTO users (name_user, pass, status )
        VALUES ( '$name_user', '$pass', $status)";
        $res=$db->query($sql);
        if($res){                   
            return $res;
        }else{
            return "error ejecucion";
        }
    }      


    public function select ($params){ 
        $db= Singleton::getConnect();
        $params= implode( ", " , $params); 
        $sql="SELECT  $params FROM users ";
        $res=$db->getArray($sql);
        if($res){
            return $res;
        }else{
            return "error ejecucion";
        }
    }    
    
    public function selectbyparam($params, $param, $paramid){ 
        $db= Singleton::getConnect();
        $params_string= implode( ", " , $params); 
        $sql="SELECT $params_string FROM users Where $param='$paramid'";
        $res=$db->getArray($sql);        
        if($res){
            return $res;            
        }else{
            return "error ejecucion";
        }
    }    


    public function update($query){ 
        $db= Singleton::getConnect();
        $sql=$query;
        $res=$db->query($sql);
        if($res){
            return $res;
        }else{
            return "error ejecucion";
        }
    } 
    
    public function delete($id){ 
        $db= Singleton::getConnect();
        $sql="DELETE FROM user WHERE id_user=$id";
        $res=$db->query($sql);
        if($res){
            return $res;
        }else{
            return "error ejecucion";
        }
    }    
    
}    