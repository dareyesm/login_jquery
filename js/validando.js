$("button#submit").click(function(){
    if($("#nuser").val() === "" || $("#puser").val() === ""){
        $("div#mensaje").html("Ingrese el usuario y la clave por favor.");
        return false;
    }else{
        $.post($("#my_form").attr("action"),
            $("#my_form :input").serializeArray(),
            function(data){
                $("div#mensaje").html(data);
                if(data == "Usuario encontrado"){
                    window.location.href = "otra.php";
                }
            });
    }
    $("#my_form").submit(function(){
        return false;
    });
});