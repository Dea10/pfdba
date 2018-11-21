<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Empleados</title>
  </head>
  <body>

    <?php 

      //echo 'hola <br><br>';
      $usuario = 'root';
      $pass = '';

    try {
        $mbd = new PDO('mysql:host=localhost;dbname=carwash', $usuario, $pass);
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    function getOwner($conn) {
      $sql=$conn->query('SELECT first_name, last_name, email, phone FROM owner');
      $arr=$sql->fetchAll(PDO::FETCH_ASSOC);
      foreach($arr as $owner){
        echo $owner['first_name'].'\t'.$owner['last_name'].'\t'.$owner['email'].'\t'.$owner['email'].'\t'.$owner['phone'].'\n';
      }
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">CarWash Tycoon</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">En vivo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="empleados.php">Solo empleados</a>
          </li>
        </ul>
      
      </div>
    </nav>

    <?php
      $sql=$mbd->prepare('SELECT * FROM owner');
      $sql->execute();
      $arr=$sql->fetch(PDO::FETCH_ASSOC);
      echo 'arreglo: ';
      echo $arr;
      foreach($arr as $owner){
        echo 'usuario: ';
        echo $owner['first_name'].'\t'.$owner['last_name'].'\t'.$owner['email'].'\t'.$owner['email'].'\t'.$owner['phone'].'\n';
      }

      //getOwner($mbd);

      $mbd=null;
     ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>