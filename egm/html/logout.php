<?php 
session_start();

session_destroy();
header("Location:secenek.php?durum=exit");

 ?>