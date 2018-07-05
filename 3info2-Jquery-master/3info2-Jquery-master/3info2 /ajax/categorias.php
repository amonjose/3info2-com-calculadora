
<html>

<head>
</head>

<body>


    <h2>Lista de Categorias</h2>

    <ul>
        <?php

              require_once "../app/modelos/CategoriaCrud.php";

              $crud = new CategoriaCrud();
              $categorias = $crud->getCategorias();
                foreach ($categorias as $categoria){
                  echo "<li>".$categoria->getNome()."</li>";
                }

              ?>


        </ul>


</body>

</html>





