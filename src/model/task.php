<?php
include_once("../conexion_singleton/singleton.php");

class Task{    
    private $name_task;   
    private $id_schedule;    
    private $description;    
    private $status;     
    

    public function __construct(){         
    }      

    public function create($name_task, $description, $status ){ 
        $db= Singleton::getConnect();
        $this->$name_task=$name_task;        
        $this->$description=$description;        
        $this->$status=$status;        

        $sql="INSERT INTO task (name_task, description, status)
        VALUES ( '$name_task', '$description', $status )";
        $res=$db->query($sql);
        if($res){
            return $res;
        }else{
            return "error ejecucion";
        }
    } 

    public function edit_task($task){
        $db= Singleton::getConnect();
        
    }

    // in this function asined task a one user

    public function asing_task_user($id_task, $id_user){
        $db= Singleton::getConnect();
        $query="INSERT INTO asing_task (id_user, id_task) values ($id_user, $id_task)";
        $res=$db->query($query);
        if($res){
            return $query;
        }else{
            return $query;
        }
        
    }

    // in this function asined task a one schedule

    public function asing_task_schedule($id_task, $id_schedule){
        $db= Singleton::getConnect();
        
    }        
    public function list($id_user){
        $db= Singleton::getConnect();
        $query="SELECT t.id_task, t.name_task, t.description, t.status, u.name_user  FROM asing_task ast
        inner join users u on u.id_user=ast.id_user
        inner join task t on t.id_task= ast.id_task
        where ast.id_user=$id_user";
        $res=$db->getArray($query); 
        if($res){
            return $res;
        }else{
            return $res;
        }
    }

    public function list_schedule($id_task){
        $db= Singleton::getConnect();        
    }

    public function close_task($id_task, $id_schedule){
        $db= Singleton::getConnect();
        
    }
    
    
    


    
    
}    