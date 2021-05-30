<?php
    
    
    include "../../config/conexionBD.php";
    $nombre=$_GET["nombrel"];
    ECHO"$nombre";
    $sql="SELECT * FROM libro WHERE lib_nombre=$nombre";

    
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        $row = $result->fetch_assoc();
        $codigo=$row["lib_codigo"];
        
        //esta parte envia codigo de usuario con el q ingresa
        //$codigousuario=$row["usu_codigo"];
      
        header("Location:/BoniLema-Juan-examen/admin/vista/agregar_capitulo.php?codigo=$codigo");
    }else {
        
        //header("Location:../vista/login.html");
        echo"<h1>no existe libro</h1>";
    }



    

    $conn->close();
?>