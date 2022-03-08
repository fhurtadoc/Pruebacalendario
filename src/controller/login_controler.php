<?php
include_once('../model/user.php');

$newuser=new User();

if(isset($_GET['action'])){
    
    switch($_GET['action']){

        case "singUp":
            $estado=[];
            if (!empty($_POST['name_user']) && !empty($_POST['pass'])) {
                $name_user=$_POST['name_user'];
                $pass = $_POST['pass'];
                $hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);
                $inserUser=$newuser->insert($name_user, $hash, 0);                                
                if ($inserUser) {
                    $estado=array("http"=>200, "mensaje"=>"se creo correctamente el usuario");
                }else{
                    $estado=array("http"=>500, "mensaje"=>"error en la base de datos");
                }
            }
            echo json_encode($estado);         
        break;


        case "login":             
            $estado=[];
            if (!empty($_POST['name_user']) && !empty($_POST['pass'])) {
                $password=$_POST['pass'];
                $name_user=$_POST['name_user'];
                $params=["name_user", "pass", "id_user"];
                $seletby=$newuser->selectbyparam($params, "name_user", $name_user);                  
                if($seletby){                    
                    $hashDB = $seletby[0]['pass'];
                    if (password_verify($password, $hashDB)) {
                        session_start();
                        $_SESSION['USER'] = $seletby;
                        $estado=array("http"=>200, "mensaje"=>"contraseña correcta");     
                    }else{
                        $estado=array("http"=>400, "mensaje"=>"contraseña esta erronea ");
                    }
                }
            } 
            echo json_encode($estado);
        break;

        case "cerrar":
            session_start();
            session_destroy();
            header("location: ../views/pages/home.php");            
        break;    
    }

}