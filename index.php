<?php 

  echo 'hola';
  $usuario = 'root';
  $pass = '';

try {
    $mbd = new PDO('mysql:host=192.168.100.56;dbname=sakila', $usuario, $pass);
    foreach($mbd->query('SELECT * from actor') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>