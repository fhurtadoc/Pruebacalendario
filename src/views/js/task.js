$(document).ready( function () {
    gettaskUsua();

    $(function() {
        $( "#accordion" ).accordion();
    });


    function gettaskUsua(){
        var id_user=$('#id_user').val()
        data={
            id_user:parseInt(id_user) 
        }        
        $.ajax({
            url: "/src/controller/task_controller.php?action=list_task", 
            method:"get",
            data:data
        }).done((res)=>{
            var data=JSON.parse(res);
           data.forEach(element => {
                let style="active";
                if(element.status!=0){
                    let style="inactive";
                }
                let template=`                
                <div id="task">       
                Estado:         
                <div class="${style}"></div>
                    <p>Nombre de la Tarea: ${element.name_task}</p>
                    <div>
                        <p>
                        descripcion:
                        ${element.description}
                        </p>
                        Actividades
                        <div>

                        </div>
                    </div>                    
                    <button class="btn btn-light"  onclick="createShedule()" >Crear Actividad</button>
                    <div class="hidden elemnt-${element.id_task}"> 
                        <h2>Crear actividades</h2>
                        <label for="date">Fecha de realizacion de la Tarea</label>                        
                        <input type="date" id="date" name="date"
                        value="2018-07-22" class="form-control">
                        <label for="date">Numero de horas</label>                        
                        <input type="number" class="form-control"> 
                        <label for="date">Avance en la Tarea</label>                        
                        <textarea  type="text" class="form-control" id="advance"  placeholder="Avance de la tarea" name="advance"></textarea>
                        <button class="btn btn-primary"  onClick='createShedule(1)' >Crear nueva Actividad</button>
                    </div>
                </div>
                `;                
                $(".accordion_continer").append(template); 
            });
        })
    }




    
})


function createTask(){
    var id_user=$('#id_user').val();
    var name_task=$('#name_task').val();
    var description=$('#description').val();
    var status=$('#status').val();
    var data={
        name_task:name_task,
        description:description,
        status:status, 
        id_user:id_user
    }
    console.log(data);
    $.ajax({
        url: "/src/controller/task_controller.php?action=create_task", 
        method:"POST",
        data:data
    }).done((res)=>{
        console.log(res);
    })
}

function createShedule(id_task){
    console.log(id_task);

}