function login(){    
    let usua=$("#usua_login").val()
    let pass=$("#pass_login").val()
    let data={
        name_user:usua,
        pass:pass
    }    
    
    $.ajax({
        cache: false, 
        url: "./src/controller/login_controler.php?action=login", 
        method:"post",
        data:data    
    }).done(function(res) {        
        let data=JSON.parse(res);        
       if(data.http===200){                       
            location.href = "/src/views/pages/task.php"            
        }else{
            location.reload(); 
            
        }
    })
}

function singUp(){
    let usua=$("#usua_singup").val()
    let pass=$("#pass_singup").val()
    let data={
        name_user:usua,
        pass:pass
    }    
        
    $.ajax({
        url: "./src/controller/login_controler.php?action=singUp", 
        method:"post",
        data:data    
    }).done(function(res) {
        console.log(res);        
        let data=JSON.parse(res);        
        console.log(res);
        if(data.http===200){                       
            location.href = "/src/views/pages/home.php";
        }else{
            location.reload(); 
            
        }
    })
}

