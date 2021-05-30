<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Lista Autores</title>
        <link href="../vista/css/estilos.css" rel="stylesheet" />
        
        
    </head>
    <body>




        <div id="contenedor">
    <header>
        
      <img src="../vista/img/logob.jpg" alt="Curbside " />
      <nav>
          <ul class="menu">
              <?php
              
         
         echo" <li><a href='index.php'>inicio</a></li>";
         echo" <li><a href='autores.php'>Autores</a></li>";
         echo" <li><a href='buscar.php'>Buscar</a></li>";
        
          ?>
          </ul>
         </nav>
    
   </header>
   <section id="contenido">
       
        <table > 
        <tr>
            <th>Codigo</th>
            <th>Nombres</th>
            <th>Nacionalidad</th>
           
           

        </tr>
        <?php
        include '../../config/conexionBD.php';
       
        
       
        $sql="SELECT*FROM autor ";
        $result=$conn->query($sql);
        if ($result->num_rows>0) {
            # code...
            while ($row = $result->fetch_assoc()) {
                # code...
                echo"<tr>";
                echo" <td>".$row["aut_codigo"]."</td>";
                echo" <td>".$row["aut_nombres"]."</td>";
                echo" <td>".$row["aut_nacionalidad"]."</td>";
               
                echo"</tr>";
            }
        }else {
            echo"<tr>";
            echo"<td colspan='7' No existen usuarios registrados en el sistema </td>";
            echo"</tr>";
        }
        //echo"  <a href='telefono.php?codigoU=".$codigoU."'>telefonos</a>";
        //echo"     ";
        //echo"  <a href='configuracion_perfil.php?codigoU=".$codigoU."'>configuracionPerfil</a>";
      
        $conn->close();
        ?>

        </table>
        <br>
        
        <!--<a href='../../../config/cerrar_sesion.php'>cerrar sesion(*)</a>*/-->
        </section>
        <footer>
        <p>Creado Por: Juan Boni </p>
         <p>informacion de contacto: <a href="mailto:juanbny85@gmail.com">
        juanbny85@gmail.com</a>.</p>
        <p>Call: <a href=”tel:+5933022307”>(593) 302-2307</a></p>
         <p>copyright &copy;Todos los derechos reservados</p>
        </footer>

        </div>
    </body>
</html>