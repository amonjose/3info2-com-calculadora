<?php

    require_once "calculadora.php";

?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>CALCULADORA IP</title>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

         <script >
            $(document). ready(function() {

                $("#botaoDoAmon"). click(function(){
                    $.get("calculadora.php",
                    
                    {
                        IP1: $("#1") .val(),
                        IP2: $("#2") .val(),
                        IP3: $("#3") .val(),
                        IP4: $("#4") .val()
                    }

                    ,
                     function(dados){

                        $("#resultado").html(dados);


                    });


                });

            });



         </script>
</head>
<body>

<form action="calculadora.php" method="GET">
    <input id="1" style="border:3px solid black; line-height: 1; padding: 0 5px; width: 250px;" type="text" size="3" maxlength="3" name="IP1">
    <input id="2" style="border:3px solid black; line-height: 1; padding: 0 5px; width: 250px;" type="text" size="3" maxlength="3" name="IP2">
    <input id="3" style="border:3px solid black; line-height: 1; padding: 0 5px; width: 250px;" type="text" size="3" maxlength="3" name="IP3">
    <input id="4" style="border:3px solid black; line-height: 1; padding: 0 5px; width: 250px;" type="text" size="3" maxlength="3"  name="IP4">
    <input id="mascara" style="border:3px solid black; line-height: 2; padding: 0 5px; width: 200px;" type="text" name="mascara" placeholder="Digite uma Máscara ">
    <input id="botaoDoAmon" type="submit" name="Enviar">


    <div id= "resultado"></div>
</form>

</body>
</html>
