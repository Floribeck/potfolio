<?php
@include("connexion.php");
$code=$_GET['num_eleve'];
$sql = "DELETE FROM eleves WHERE num_eleve = '$code'";
mysql_query($sql);

header('location:affichagespeciale.php');
exit;

mysql_close();
?>