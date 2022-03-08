<?php
include_once("../conexion_singleton/singleton.php");

class Schedule{  
    
    private $date_schedule;   
    private $status;    
    private $hours;
    private $advance;    
    

    public function __construct(){         
    }      

    public function create($date_schedule, $status, $hours, $advance){ 
        $db= Singleton::getConnect();
        $this->$date_schedule=$date_schedule;
        $this->$status=$status;
        $this->$hours=$hours;
        $this->$advance=$advance;

        $sql="INSERT INTO schedule (date_schedule, status, hours, advance )
        VALUES ( '$date_schedule', $status, $hours, '$advance' )";
        $res=$db->query($sql);
        if($res){
            return $res;
        }else{
            return "error ejecucion";
        }
    }      


}    