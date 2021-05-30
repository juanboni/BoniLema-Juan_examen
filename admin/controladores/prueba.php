<html>
    <head></head>

    <body>


    <?php
    //$codigol=$_POST["codigol"];
      $codigol = isset($_POST["codigol"])?trim($_POST["codigol"]):null;
      $titulo = isset($_POST["titulo"])?mb_strtoupper(trim($_POST["titulo"]),'UTF-8'):null;
      $numero = isset($_POST["numero"])?trim($_POST["numero"]):null;
      $codigoaut = isset($_POST["codigoa"])?trim($_POST["codigoa"]):null;
       
    echo "$codigol";
    echo"<br>";
    echo "$titulo";
    echo"<br>";
    echo "$numero";
    echo"<br>";
    echo "$codigoaut";
    echo"<br>";
    
    ?>

  
       
    </body>
</html>