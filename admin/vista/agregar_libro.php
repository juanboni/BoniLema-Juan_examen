<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>agregar libro</title>
        <link href="../vista/css/estilosF.css" rel="stylesheet" />
        <script type="text/javascript" src="validaciones.js"></script>
    </head>
    <body>
    
        <?php
       
     

        include '../../config/conexionBD.php';

                ?>
                <form class="formulario" id="formulario01" method="POST" action="../../admin/controladores/agregar_libro.php">
                <h1>Agregar Libro</h1>
                <div class="contenedor">
                <input type="hidden" id="codigo" name="codigo" value=""/>
                <div class="input-contenedor">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="" placeholder="ingrese el nombre del libro" required required oninput ="return validarLetras(this)"/>
                    
                </div>

                    <div class="input-contenedor">
                    <label for="paginas">Paginas</label>
                    <input type="text" id="paginas" name="paginas" value="" placeholder="ingrese el numero de paginas" required required oninput ="return validarNumero(this)"/>
                    <span id="mensajetipo" class="error"></span>
                </div>

                    <div class="input-contenedor">
                            <label for="isbn">ISBN</label>
                            <input type="text" id="isbn" name="isbn" value="" placeholder="ingrese codigo isbn" required/>
                    </div>
                   
                    <input type="submit" id="crear" name="crear" value="crear" class="button"/>
                    <input type="reset" id="cancelar" name="cancelar" value="cancelar" class="button"/>
                    

                    <div>
  
                        <?php
                            //echo "<p>¿quieres regresar a tu lista de telefonos? <a class="link" href="../telefono.php?=".$codigo."">Registrate </a></p>";
                            echo "<p>Regresar a la lista de libros <a href='index.php'>Regresar</a></p>";
                            ?>
                    </div>

                    </div>
                </form>
              

    </body>
</html>