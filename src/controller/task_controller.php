<?php
include_once('../model/task.php');
include_once('../model/schedule.php');

$task=new Task();
$schedule=new Schedule();

if(isset($_GET['action'])){
    switch($_GET['action']){

        case 'create_task':
            
            $estado=[];
            $name_task=$_POST['name_task'];
            $description=$_POST['description'];
            $status=$_POST['status'];                          
            $create_task=$task->create($name_task, $description, $status);             
            if ($create_task) {
                    $id_user=$_POST['id_user'];
                    $id_task=$create_task;                    
                    $asing_task=$task->asing_task_user($id_task, $id_user);                                        
                    if($asing_task){
                        $estado=array("http"=>200, "mensaje"=>"se creo correctamente la tarea");
                    }else{
                        $estado=array("http"=>500, "mensaje"=>"error en la base de datos asociar task");
                    }                    
                }else{
                    $estado=array("http"=>500, "mensaje"=>"error en la base de datos");
                }            
            echo json_encode($estado);
        break;

        case 'asing_task_schedule':
            $estado=[];
            // first step is create new schedule and after step is assigned the task
            if (!empty($_POST['date_schedule']) && !empty($_POST['status']) && !empty($_POST['hours']) && !empty($_POST['advance'])) {
                $date_schedule=$_POST['date_schedule']; 
                $status=$_POST['status']; 
                $hours=$_POST['hours']; 
                $advance=$_POST['advance'];
                $schedule->create($date_schedule, $status, $hours, $advance);
                if($schedule){
                    $id_task=$_POST['date_schedule'];
                    $schedule_id=$schedule['id'];
                    $asing_task=$task->asing_task_schedule($id_task, $schedule_id );
                    if($asing_task){
                        $id_user=$_POST['id_user'];
                        $asing_user_task=$task->asing_task_user($id_task,$id_user);                        
                    }
                }
            }
            echo json_encode($estado);
        break;

        case 'list_task':
            $id=$_GET['id_user'];            
            $all_task=$task->list($id);            
            echo json_encode($all_task);
        break;

        case 'list_schedule':
            $id_task=$_POST['id_task'];
            $all_schedule=$task->list_schedule($id_task);
            echo json_encode($all_schedule);
        break;

        case 'close_task':

        break;
    }
}