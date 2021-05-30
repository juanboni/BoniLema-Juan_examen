<?php
//incluir conexion  a la base de datos
include '../../config/conexionBD.php';
$nombre=$_GET['nombre'];

//$sql="SELECT * FROM usuario WHERE usu_eliminado = 'N' and usu_cedula='$cedula'";
$sql="SELECT distinct lib_nombre,lib_isbn,lib_paginas,lib_codigo FROM libro,autor,capitulo WHERE lib_codigo=cap_lib_codigo and aut_codigo=cap_aut_codigo and aut_nombres='$nombre'  ";

$result = $conn->query($sql);
echo "<section id='contenido'>";
echo "<table  border='1'>
<tr>
<th>libro</th>
<th>Isbn</th>
<th>Paginas</th>
<th>capitulos</th>


</tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
         # code...
         echo"<tr>";
         echo" <td>" . $row['lib_nombre'] . "</td>";
         echo" <td>" . $row['lib_isbn'] . "</td>";
         echo" <td>" . $row['lib_paginas'] . "</td>";
         echo" <td> <a href='listar_capitulos.php?codigo=".$row['lib_codigo']."'>Ver Capitulo   </a></td>";
     
         echo"</tr>";
    }
}else {
    echo "<tr>";
    echo "<td colspan='7'> No existen libros resgistradas en el sistema </td>";
    echo "</tr>";
} 
echo"</table>";
echo"<br>";
echo"</section>";
$conn->close();

?>
