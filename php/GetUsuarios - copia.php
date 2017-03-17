<?php
    include("Conexion4B.php"); //Sinónimo de "import" de Java
    //Importa el funcionamiento de este archivo.
    
    $Resultados = $mysqli->query("SELECT * FROM usuarios"); //Comsulta de MySQL
    $Filas = $Resultados->fetch_all(); //Obtiene todos los valores de la consulta
        //$Filas = $Resultados->fetch_assoc();

    echo"<table> <tr> <th>Id</th> <th>Nombre</th> <th>Password</th> <th>Rol</th> </tr>";

    foreach($Filas as $fila){ //Recorre el arreglo de los registros
        echo "<tr> <td>".$fila[0]."</td> <td>".$fila[1]."</td> <td>".$fila[2]."</td> <td>".$fila[3]."</td> </tr>";
        //var_dump($fila);
    }

    echo "</table>";
    
    phpinfo();
    
    //var_dump($Filas); //Imprime arreglos
?>