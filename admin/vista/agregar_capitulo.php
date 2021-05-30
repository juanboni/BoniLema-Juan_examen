<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>agregar Capitulo</title>
        <link href="../vista/css/estilosF.css" rel="stylesheet" />
        <script type="text/javascript" src="autorselect.js"></script>
        <script type="text/javascript" src="validaciones.js"></script>
    </head>
    <body>
    
        <?php
       
     

        include '../../config/conexionBD.php';
        $codigol=$_GET["codigo"];
                ?>
                <form class="formulario" id="formulario01" method="POST" action="../../admin/controladores/agregar_capitulo.php">
                <h1>Agregar capitulo</h1>
                <div class="contenedor">
                <input type="hidden" id="codigoc" name="codigoc" value=""/>
                <div class="input-contenedor">
                    <!--<label for="codigol">libro</label>-->
                    <input type="hidden" id="codigol" name="codigol" value="<?php  echo $codigol ?>" />
                    
                </div>
                <div class="input-contenedor">
                    <label for="numero">Numero</label>
                    <input type="text" id="numero" name="numero" value="" placeholder="ingrese el numero de capitulo" required  oninput ="return validarNumero(this)"/>
                    
                </div>

                    <div class="input-contenedor">
                    <label for="titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" value="" placeholder="ingrese el titulo" required  oninput ="return validarLetras(this)"/>
                    <span id="mensajetipo" class="error"></span>
                </div>
               

                <div class="input-contenedor" id="div">
                    <br>
                <!--<label for="codigoa">autor</label>-->
               <!-- <input type="text" id="codigoa" name="codigoa" value="" placeholder="ingrese el titulo" required />-->
               <select   name="codigoa" id="codigoa" class="col-4 form-control" onclick="muestraselect(this)">
                  <option value=""> Seleccione Autor </option>
               </select>
                    <br>
                    <br>
                </div>

                </div>
                   
                    <input type="submit" id="crear" name="crear" value="crear" class="button"/>
                    <input type="reset" id="cancelar" name="cancelar" value="cancelar" class="button"/>
                    

                    <div>
  
                        <?php
                            //echo "<p>¿quieres regresar a tu lista de telefonos? <a class="link" href="../telefono.php?=".$codigo."">Registrate </a></p>";
                            echo "<p>si deseas  finalizar has click en  <a href='index.php'>Terminar</a></p>";
                            ?>
                    </div>

                    </div>
                </form>
              

    </body>
</html>