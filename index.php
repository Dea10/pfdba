<?php 

  echo 'hola <br><br>';
  $usuario = 'root';
  $pass = '';

try {
    $mbd = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $pass);
    foreach($mbd->query('SELECT * from payment') as $fila) {
        print_r($fila);
        print '<br>';
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>