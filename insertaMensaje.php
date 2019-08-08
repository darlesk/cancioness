<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/alertify.css">
  <link rel="stylesheet" type="text/css" href="css/themes/bootstrap.css">
  <script src="js/alertify.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>
<body>

<script type="text/javascript">
  
</script>
</body>
</html>
<?php 
include("conexion.php");
date_default_timezone_set('America/Mexico_City');


$nombre=$_POST["valorCaja1"];
$email=$_POST["valorCaja2"];
$mensaje=$_POST["valorCaja3"];




$fecha= date("Y-m-d H:i:s");
$sql = "INSERT INTO `mensajes` (usuario, email, mensaje,fecha)
        VALUES ('".$_POST["valorCaja1"]."','".$_POST["valorCaja2"]."','".$_POST["valorCaja3"]."','$fecha')";
        // echo $sql;

  if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>alertify.alert('PerrockSpa', 'Tu mensaja ha sido enviado!', function(){ 
      location.reload();alertify.success('Ok'); });</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);



 ?>

