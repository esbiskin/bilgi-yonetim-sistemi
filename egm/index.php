<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emniyet Genel Müdürlüğü Bilgi Sistemi">
    <meta name="keywords" content="Polis, Emniyet, Sabıka, Ehliyet durumu, Özel harekat, Terör, Asayiş, trafik, narkotik, interpol, suç, hırsızlık, kapkaç, dolandırıcılık, ruhsat, ceza, ihbar, suçlu, güvenlik, göçmen, kaçakçılık, ">
    <meta name="authors" content="Ertuğrul Samet Bişkin-Mustafa Murat Tepe">

    <title>T.C. İçişleri Bakanlığı Emniyet Genel Müdürlüğü</title>
    <link rel="shortcut icon" href="images\egm_favicon.ico" type="image/png">

    <style>
        #analogo{
            width: 208px;
            height: 156px;
            background-image: url(./images/egm_logo_ana.png);
            background-repeat: no-repeat;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5%;
		}

        h1{
            text-align: center;
            font-family: Verdana;
            font-size: larger;
            color: white;
        }

        #polisbuton{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            margin: 0;
            position: absolute;
            top: 55%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgb(1, 14, 61);
            border: none;
            color: white;
            padding: 15px 32px;
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
        #polisbuton:hover {opacity: 0.8}

        #vatandasbuton{
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
            padding: 15px 32px;
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
        #vatandasbuton:hover {opacity: 0.8}
	</style>
</head>
<body style="background-color:#0b1e60ff">

    <div id="analogo"></div>

    <h1>T.C. İçişleri Bakanlığı</h1>
    <h1>Emniyet Genel Müdürlüğü Bilgi Sistemi</h1>

    <button id="polisbuton" onclick="window.location.href = './html/polis_giris.php';">T.C. POLİS GİRİŞİ</button>
    <button id="vatandasbuton" onclick="window.location.href = './html/vatandas_giris.php';">T.C. VATANDAŞ GİRİŞİ</button>
</body>
</html>