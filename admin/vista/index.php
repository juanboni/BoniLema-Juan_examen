<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>inicio Biblioteca</title>
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
            <!--<th>Codigo</th>-->
            <th>Nombre</th>
            <th>Paginas</th>
            <th>Isbn</th>
            <th>Capitulos</th>
           

        </tr>
        <?php
        include '../../config/conexionBD.php';
       
        
       
        $sql="SELECT*FROM libro ";
        $result=$conn->query($sql);
        if ($result->num_rows>0) {
            # code...
            while ($row = $result->fetch_assoc()) {
                # code...
                echo"<tr>";
                //echo" <td>".$row["lib_codigo"]."</td>";
                echo" <td>".$row["lib_nombre"]."</td>";
                echo" <td>".$row["lib_paginas"]."</td>";
                echo" <td>".$row["lib_isbn"]."</td>";
                echo" <td> <a href='listar_capitulos.php?codigo=".$row['lib_codigo']."'>Ver Capitulo   </a></td>";
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
        echo"<section id='addtelefono'>";
        echo"<a href='agregar_libro.php'>agregar_libro</a>";
        
        //echo"<a href='iniciou.php?codigoU=".$codigoU."'>regresar</a>";
        //echo"<a href='iniciou.php'>regresar</a>";
        echo "</section>";
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