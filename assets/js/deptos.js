$(document).ready(function(){
    
    //Llenar los departamentos
    $.ajax({
        type :"POST",
        url: "ciudadesdeptos.php",
        dataType: "json",
        data: "",
        success: function(data)
        {
            //console.log(data.departamentos)
            for (let i = 0; i < data.departamentos.length; i++) {
                $("#departamento").append("<option value='"+data.departamentos[i]+"'>"+ data.departamentos[i] + "</option>");
            }
            
        },
        error: function (jqXHR, textstatus)
        {
            alert(textstatus);
        }
    });
  });