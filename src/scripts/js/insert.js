$(function(){
    console.log("Listener de usuarios");
    $("#insertUser").click(function(){
        console.log("Insertando nuevo usuario...");
        var parameters = {
            "nombre": $("#nombre").val(),
            "edad": $("#edad").val(),
            "direccion": $("#direccion").val()
        }
        $.ajax({
            type: 'POST',
            url: './save.php',
            dataType: "json",
            data: parameters,
            success: function($response){
                console.log($response);
                console.log($response.Respuesta);
                if($response.Respuesta==true){
                    alert("El registro se ha insertado con éxito");
                    $("#nombre").val("");
                    $("#edad").val("");
                    $("#direccion").val("");
                }
            }
        });
        console.log(parameters);
    })
})