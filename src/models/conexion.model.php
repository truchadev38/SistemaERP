<?php
class ConexionModel
{
  function connect()
  {
    // TODO: set these secrets to ans .env file
    $user = 'root';
    $host = 'localhost';
    $password = '';
    // $port = 3306;
    $dbname = 'alertSystemDb';

    try {
      $conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      return $conexion;
    } catch (PDOException $e) {
      die("Error al conectar: " . $e->getMessage());
    }
  }
}
?>