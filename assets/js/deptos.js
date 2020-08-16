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

    //Llenar las ciudades
    $("#departamento").on("change", function(){
        $("#ciudad").empty().append('<option value=""> Seleccione </option>');

        var valoresEnviar = {
            "departamento" : this.value
        }

        $.ajax({
            type :"POST",
            url: "ciudadesdeptos.php",
            dataType: "json",
            data: valoresEnviar,
            success: function(data)
            {   
                console.log(data.ciudades);
                for (let i = 0; i < data.ciudades.length; i++) {
                    
                    $("#ciudad").append("<option value='"+data.ciudades[i]+"'>"+ data.ciudades[i] + "</option>");
                }
                
            },
            error: function (jqXHR, textstatus)
            {
                alert(textstatus);
            }
        });
    });
  });