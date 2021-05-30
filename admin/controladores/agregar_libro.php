<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
</head>
<body>



    <?php

        include "../../config/conexionBD.php";
        
        $nombre = isset($_POST["nombre"])?mb_strtoupper(trim($_POST["nombre"]),'UTF-8'):null;
        $isbn = isset($_POST["isbn"])?trim($_POST["isbn"]):null;
        $paginas = isset($_POST["paginas"])?trim($_POST["paginas"]):null;
    
      
       
       
        $sql="INSERT INTO libro VALUES(0,'$nombre','$isbn','$paginas')";
        if ($conn->query($sql)===TRUE) {
            # code...s
         
            echo"<p> Se ha creado telefono correctamente!!!</p>";
        }else{
            if ($conn->errno==1062) {
                # code...
                echo"<p class='error'>La persona con la cedula  ya esta registrada en el sistema </p>";
            }else {
                # code...
                echo"<p class='error'>Error:".mysqli_error($conn)."</p>";
                echo $sql;
               
            }
        }

        $conn->close();
        //echo "<a href='../../vista/administrador/inicioa.php'>Regresar</a>";
        //echo"<a href='../../vista/usuario/telefono.php?codigoU=".$codigo2."'>Regresar</a>";
        //header("Location:/examen/admin/vista/agregar_libro.php");
        header("Location:/BoniLema-Juan-examen/admin/controladores/buscar_liba.php?nombrel='$nombre'");
    ?>
    

</body>
</html>