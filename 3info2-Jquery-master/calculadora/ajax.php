<html>
<head>
    <title>Exercicio 1</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#bt").click(function(){
                $("#div1").load("http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/categorias.php");
                $("#bt").hide();
            });
            $("#bt1").click(function () {
            $.get("http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/produtos.php", function (data) {
                $("#div1") .html(data);
                });
            });
            $("#bt2") .click(function () {
                $.get("http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/produtos.php",
                    {
                        categoria: $("#pega").val()
                    },
                    function(dados){
                        $("#div1") .html(dados);

                    });

            });
        });
    </script>
</head>

<body>

<div id="div1">
    <h2>aqui tem alguma coisa</h2>
</div>

<button id="bt">tey</button>

<button id="bt1">tey1</button>

<input id="pega" type="text">
<button id="bt2">quero produtos</button>

</body>

</html>