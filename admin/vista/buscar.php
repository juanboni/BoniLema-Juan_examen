<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="buscar.js" ></script>
        <title>Buscar Libros</title>
        <link href="../vista/css/estilos.css" rel="stylesheet" />
    </head>
    <body> 
  
        <div id="contenedor">
            <header>
        
                <img src="../vista/img/logob.jpg" alt="Curbside Thai" />
                
                <nav>
                    <ul class="menu">
                        <?php
                       
                   
                        echo" <li><a href='index.php'>inicio</a></li>";
                        echo" <li><a href='autores.php'>Autores</a></li>";
                        echo" <li><a href='buscar.php'>Buscar</a></li>";
                       
                    ?>
                    </ul>
                  
             </header>

             <section id="contenido">
                <div class="centert">
                    <img src="../vista/img/libro.jpg" alt="Curbside Thai" />
                </div>
                <form class="form_search" onsubmit="return buscarPorAutor()" action="../../admin/controladores/buscar.php" method="POST">
        <input type="text" id="nombre" name="nombre" value="">
        <input class ="btn_search" type="button" id="buscar" name="buscar" value="buscar" onclick="buscarPorAutor()" >
        </form>
        <div id="informacion"><b>Datos del Libro</b></div>
      
      
        </section>

        <footer>
            <p>Creado Por: Juan Boni </p>
             <p>informacion de contacto: <a href="mailto:juanbny85@gmail.com">
             juanbny85@gmail.com</a>.</p>
            
            <p>Call: <a href=”tel:+593984969689”>984969689</a></p>
             <p>copyright &copy;Todos los derechos reservados</p>
            </footer>
           </section>
       </div>
      
    </body>
</html>