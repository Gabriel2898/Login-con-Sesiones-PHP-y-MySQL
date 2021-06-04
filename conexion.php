<?php
include("configuracion.php");
$conn =new mysqli($server,$user,$pass,$bd);
if(mysqli_connect_error()){
  echo "fallo", mysqli_connect_error();
  exit();
}
?>