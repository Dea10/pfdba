<?php 

  echo 'hola';
  $usuario = 'root';
  $pass = '';

try {
    $mbd = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $pass);
    foreach($mbd->query('SELECT * from actor') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>