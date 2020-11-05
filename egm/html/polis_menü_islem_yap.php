<?php

include "../baglan.php";


$kimliksor=$db->prepare("SELECT * FROM kisi_listesi  ");
$kimliksor->execute();
$kimlikcek=$kimliksor->fetch(PDO::FETCH_ASSOC);

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
        p{
            text-align: center;
            font-family: sans-serif;
            font-size: small;
            color: white;
        }
        #sabikakaydi{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 40%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 12px 52px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
        #sabikakaydi:hover {opacity: 0.8}

        #trafikcezalari{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 48%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 12px 48px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
        #trafikcezalari:hover {opacity: 0.8}

        #ehliyetdurumu{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 56%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 12px 44px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
        #ehliyetdurumu:hover {opacity: 0.8}

        #succesitleri{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 64%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 12px 55px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
        #succesitleri:hover {opacity: 0.8}

        #terorarananlar{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 72%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 12px 45px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
        #terorarananlar:hover {opacity: 0.8}

        #kimlikbilgileri{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 80%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 12px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
        #kimlikbilgileri:hover {opacity: 0.8}

        #egmiletisim{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 88%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 12px 58px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }
        #egmiletisim:hover {opacity: 0.8}  


         #geri{
            margin-top: 27%;
            margin-left: 75%;
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
          width: 135px;
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
    </style>
</head>
<body style="background-color:#0b1e60ff">

    <div id="analogo"></div>

    <p>Yapmak İstediğiniz İşlemi Seçiniz</p>

    <button id="sabikakaydi" type="submit" onclick="window.location.href='polis_islem_sabika_kaydi.php';">Sabıka Kaydı</button>

    <button id="trafikcezalari" type="submit" onclick="window.location.href='polis_islem_trafik_cezalari.php';">Trafik Cezaları</button>

    <button id="ehliyetdurumu" type="submit" onclick="window.location.href='polis_islem_ehliyet_durumu.php';">Ehliyet Durumu</button>

    <button id="succesitleri" type="submit" onclick="window.location.href='polis_islem_suc_cesitleri.php';">Suç Çeşitleri</button>

    <button id="terorarananlar" type="submit" onclick="window.location.href='polis_islem_teror_arananlar.php';">Terör Arananlar</button>

    <button id="kimlikbilgileri" type="submit" onclick="window.location.href='polis_islem_kimlik_bilgileri.php';">Kimlik Bilgileri</button>

    <button id="egmiletisim" type="submit" onclick="window.location.href='polis_islem_egm_iletisim.php';">EGM İletişim</button>

    <div id="geri">
        <button class="geri" style="vertical-align:middle" onclick="window.location.href='logout.php';"><span>Geri </span></button>

</body>
</html>