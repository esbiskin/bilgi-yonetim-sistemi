<?php 
session_start();

session_destroy();
header("Location:vatandas_giris.php?durum=exit");

 ?>