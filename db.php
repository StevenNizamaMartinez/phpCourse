<?php
  $servername = "db4free.net";
  $username = "stevennizama";
  $password = "stevennizama";
  $dbname = "stevenmysqldb";

  //Crea la conexion
  $conn = new mysqli($servername,$username,$password,$dbname);

  //Verifica la conexion

  if ($conn -> connect_error){
    die("Conexion fallida".$conn->connect_error);
  }
?>
