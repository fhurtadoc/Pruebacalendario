<?php 

session_start();
$User=$_SESSION['USER'];
if (isset($_SESSION['USER'])) {
} else {
    header("Location: ../public/login.php");
}
$name_user=$User[0]['name_user'];
$id_user=$User[0]['id_user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
        src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
        integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA="
        crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../css/task.css">
    <title>Task</title>    
</head>
<body>
    <input type="hidden" id="id_user" name="id_user" value=<?php echo $id_user;?>>
    <!--Create new task-->    
    <div class="continer">        
        <form>
        <h2>Crear Tareas</h2>
            <div class="form-group">
                <label for="name_task">Nombre de la Tarea</label>
                <input type="text" name="name_task" class="form-control" id="name_task"  placeholder="Nombre de la tarea">
                <small id="emailHelp" class="form-text text-muted">Ingrese el nombre de la Tarea.</small>
            </div>            
            <div class="form-group">
                <label for="description">Descripcion de la Tarea</label>
                <textarea  type="text" class="form-control" id="description"  placeholder="Descripcion" name="description"></textarea>
                <small id="emailHelp" class="form-text text-muted">Ingrese una descripcion de la tarea.</small>
            </div>            
            <div class="form-group">
                <label for="status">Estado de la Tarea</label>
                <select name="status" id="status">
                    <option value="0">Activo</option>
                    <option value="1">Inactivo</option>
                </select>
                <br><small id="emailHelp" class="form-text text-muted">Cuentanos si la tarea a crear esta activa</small>
            </div>             
        </form>
        <button class="btn btn-primary"  onclick="createTask()" >Crear Tarea</button>                        
    </div>
    <!--List task-->
    <div class="accordion_continer">        
        
   
    </div>
    
</body>
<script src="../js/task.js"></script>
</html>



