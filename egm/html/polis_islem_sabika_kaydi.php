<?php


include "../baglan.php";



$kayitsor=$db->prepare("SELECT * FROM sabika_kaydi ");
$kayitsor->execute();

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emniyet Genel Müdürlüğü Bilgi Sistemi">
    <meta name="keywords" content="Polis, Emniyet, Sabıka, Ehliyet durumu, Özel harekat, Terör, Asayiş, trafik, narkotik, interpol, suç, hırsızlık, kapkaç, dolandırıcılık, ruhsat, ceza, ihbar, suçlu, güvenlik, göçmen, kaçakçılık, ">
    <meta name="authors" content="Ertuğrul Samet Bişkin-Mustafa Murat Tepe">

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
        h3{
            text-align: center;
            font-family: Verdana;
            font-size: smaller;
            color: white;
        }
        p{
            text-align: center;
            font-family: sans-serif;
            font-size: medium;
            color: white;
        }

        #geri{
            margin-top: 5%;
            margin-left: 70%;
        }
        .geri {
          display: inline-block;
          border-radius: 4px;
          background-color: rgb(1, 14, 61);
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 20px;
          padding: 10px;
          width: 136px;
          transition: all 0.5s;
          cursor: pointer;
        }
        .geri span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }
        .geri span:after {
          content: '\00ab';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
        }
        .geri:hover span {
          padding-right: 25px;
        }
        .geri:hover span:after {
          opacity: 1;
          right: 0;
        } 

        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        color: white;
        }

        tr:nth-child(even) {
        background-color: #8d8c8c;
        }

    </style>
</head>
<body style="background-color:#0b1e60ff">

    <div id="analogo"></div>
    <table>
    <tr>
          <th>Tarih</th>
          <th>İşlenen Suç</th>
          <th>Alınan Ceza</th>
          <th>Tc Kimlik No</th>
          <th></th>
        </tr>
        <?php
       while($kayitcek=$kayitsor->fetch(PDO::FETCH_ASSOC)) {?>
        <tr>
          <td><?php echo $kayitcek['tarih'] ?></td>
          <td><?php echo $kayitcek['islenen_suc'] ?></td>
          <td><?php echo $kayitcek['alinan_ceza'] ?></td>
          <td><?php echo $kayitcek['tc_kimlik_no'] ?></td>
          <td><a href="islem.php?sabika_id=<?php echo $kayitcek['sabika_id']; ?>&sabikasil=ok"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="cursor:pointer;text_decoration:none;color:White;">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></td></a>

        </tr>
        <?php } ?>
      </table>
    
    <div id="geri">
    <a href="polis_menü_islem_yap.php"><button class="geri" style="vertical-align:middle" ><span>Geri </span></button></a> 
    <a href="sabika_ekle.php"> <button class="geri" style="vertical-align:middle;"><span>Kayıt Ekle </span></button></a>

</div>
</body>
</html>