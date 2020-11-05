<?php


try
{
    $db=new PDO("mysql:host=localhost;dbname=egm_html;charset=utf8;",'root','',);
   // echo "veri tabanı bağlantısı başarılı";
}catch(PDOException $e)
{
    echo $e->getMessage();
}




?>