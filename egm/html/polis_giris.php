<?php

include "../baglan.php";

$polissor=$db->prepare("SELECT * FROM police");
$polissor->execute();

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emniyet Genel Müdürlüğü Bilgi Sistemi">
    <meta name="keywords" content="Polis, Emniyet, Sabıka, Ehliyet durumu, Özel harekat, Terör, Asayiş, trafik, narkotik, interpol, suç, hırsızlık, kapkaç, dolandırıcılık, ruhsat, ceza, ihbar, suçlu, güvenlik, göçmen, kaçakçılık, ">
    <meta name="authors" content="Ertuğrul Samet Bişkin-Mustafa Murat Tepe">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <title>T.C. İçişleri Bakanlığı Emniyet Genel Müdürlüğü</title>
    <link rel="shortcut icon" href="../images/egm_favicon.ico" type="image/png">
    <style>
        #analogo{
            width: 208px;
            height: 156px;
            background-image: url(../images/egm_logo_ana.png);
            background-repeat: no-repeat;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2%;
		}

        h1{
            text-align: center;
            font-family: Verdana;
            font-size: larger;
            color: white;
        }
        
        h2{
            text-align: center;
            font-family: Verdana;
            font-size: smaller;
            color: cornsilk;
        }

        #form{
            text-align: center;
        }
        label{
            font-family: sans-serif;
            color: white;
            font-size: x-small;
        }
        input{
            width: 200px;
            height: 40px;
            padding: 8px 15px;
            margin: 8px 0;
            margin-left:auto;
            margin-right:auto;
            box-sizing: border-box;
            font-size: smaller;
            font-family: Verdana;
            border: 2px rgb(0, 5, 24);
        }
        ::-webkit-input-placeholder{
            font-size: x-small;
        }

      
        
    </style>
</head>
<body style="background-color:#0b1e60ff">

    <div id="analogo"></div>

    <h1>T.C. İçişleri Bakanlığı</h1>
    <h1>Emniyet Genel Müdürlüğü Bilgi Sistemi</h1>

    <h2> T.C. POLİS GİRİŞİ</h2>
    
    <div id="form">
        <form method="post" action="islem.php" method="post">
            <label for="sicilno">SİCİL NO</label> <br />
            <input type="text" placeholder="7 Haneli Sicil Numaranız" name="sicil_numarası" id="sicilno" maxlength="7"  title="7 Haneli Sicil Numaranızı Giriniz."> <br/><br>

            <label for="sifre">ŞİFRE</label> <br />
            <input type="password" placeholder="Şifre" name="sifre" id="sifre"><br>
            
            <button class="btn " type="submit" name="polisgiris" style="width:130px;background-color: rgb(1, 14, 61);color:white;">Giriş</button>
         

            
        </form>        
        
        <button class="btn " onclick="window.location.href='../index.php';" type="submit" style="width:130px;margin:2px 0 0 0;background-color: rgb(1, 14, 61);color:white;"><span>Geri </span></button>

    </div>
 

       <?php
        if(@$_GET['durum'] =="basarisizgiris") 
        {?>
            <h2>Eksik veya hatalı giriş yaptınız</h2>
        <?php }    ?>

    </body>
</html>


