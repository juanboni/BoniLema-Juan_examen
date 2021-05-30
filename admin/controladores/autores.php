<?php
//incluir conexion  a la base de datos
include '../../config/conexionBD.php';


//$sql="SELECT * FROM usuario WHERE usu_eliminado = 'N' and usu_cedula='$cedula'";
$sql="SELECT * FROM autor ";

$result = $conn->query($sql);
echo'<div class="input-contenedor" id="div">';
echo '<select name="codigoa" id="codigoa" class="col-4 form-control">';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
         # code...
        // echo"<option value='".$row['aut_codigo']"'> ".$row['aut_nombres']."</option>";
        echo"<option value='".$row['aut_codigo']."'>".$row['aut_nombres']."</option>";
    }
}else {
    echo "<tr>";
    echo "<h1> No existen libros registrados resgistradas en el sistema </h1>";
    echo "</tr>";
} 
echo"</select>";
echo"</div>";
$conn->close();

?>
