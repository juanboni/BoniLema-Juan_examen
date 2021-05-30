<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
</head>
<body>



    <?php

        include "../../config/conexionBD.php";
        //nombre de libro agregado antes
        
  
    
      
      
        

        $codigol = isset($_POST["codigol"])?trim($_POST["codigol"]):null;
        $titulo = isset($_POST["titulo"])?mb_strtoupper(trim($_POST["titulo"]),'UTF-8'):null;
        $numero = isset($_POST["numero"])?trim($_POST["numero"]):null;
        $codigoaut = isset($_POST["codigoa"])?trim($_POST["codigoa"]):null;
       
       
        $sql="INSERT INTO capitulo VALUES(0,$numero,'$titulo',$codigol,$codigoaut)";
        if ($conn->query($sql)===TRUE) {
            # code...s
            echo"<p> Se ha creado  correctamente!!!</p>";
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
        //header("Location:/examen/admin/vista/agregar_capitulo.php?codigo=$codigol");
        header("Location:/BoniLema-Juan-examen/admin/vista/agregar_capitulo.php?codigo=$codigol");
    ?>

</body>
</html>