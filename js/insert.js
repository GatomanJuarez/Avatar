//Funcion anónima (asegura que se hayan cargado los elementos de la página)
$(function(){
    
    //Cuando ocurra el evento de click del elemento conocido como "Form-Registro"
    $("#Form-Registro").on("submit",function(evento){
        $("#loader").fadeIn();
        //Evita que el botón de envío realice su función
        evento.preventDefault();
        //Recupera todos los datos del formulario de envío
        var datos = new FormData(this);
        
        $.ajax({
            //Destino de envío de datos
            url: "php/insertusers.php",
            //Tipo de envío de datos
            type: "post",
            //Captura de datos a envíar
            data: datos,
            //Evita formatear la información a envíar
            contentType: false,
            //Evita realizar operaciones extras de procesamiento de datos
            processData: false,
            
            //Datos que recibo del servidor
            dataType: "text"
        }).done(function(texto){ //Función al momento que el servidor termina su trabajo
            //Desaparece la imágen de "cargando"
            $('#loader').fadeOut(2000);
            //El valor que regresa la función se le otorga al elemnto "Feedback"
            $('#Feedback').text(texto);
        });
        
    });
    
});