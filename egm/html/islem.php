<?php
include "../baglan.php";

if (isset($_POST['polisgiris'])) {


	
echo $sicil_numarası=$_POST['sicil_numarası']; 
echo $sifre=$_POST['sifre']; 



$polissor=$db->prepare("SELECT * from police where sicil_numarası=:sicil_no and sifre=:sifre");
$polissor->execute(array(
    'sicil_no' => $sicil_numarası,
    'sifre' => $sifre
    ));


$say=$polissor->rowCount();



if ($say==1) {

    

    header("Location:secenek.php?durum=basarili");
    exit;
    




} else {


    header("Location:polis_giris.php?durum=basarisizgiris");

}


}

if (isset($_POST['sorgulabuton'])) {

  
    echo $tc_kimlik_no=htmlspecialchars($_POST['tc_kimlik_no']); 
 
    $sorgusor=$db->prepare("SELECT * FROM kisi_listesi where tc_kimlik_no=:tc_kimlik_no");
    $sorgusor->execute(array(
      'tc_kimlik_no' => $_POST['tc_kimlik_no']
    ));
    
    $say=$sorgusor->rowCount();
    
    if ($say==1) {
    
        echo $_SESSION['tc_kimlik_no']=$tc_kimlik_no;
        header("Location:polis_menü_sorgula.php?tc_kimlik_no=$tc_kimlik_no");
        exit;
        
    
    
    
    
    } else {
    
    
        header("Location:polis_girisi_sorgu.php?durum=basarisizgiris");
    
    }
    
    
    }

 

    
  
if (isset($_POST['kayıtekle'])) {

  
	$ayarekle=$db->prepare("INSERT INTO egm_iletisim SET
	    karakol_adi=:karakol_adi,
        telefon=:telefon
		");

	$insert=$ayarekle->execute(array(
		'karakol_adi' => $_POST['karakol_adi'],
		'telefon' => $_POST['telefon']
	
		));


	if ($insert) {

		Header("Location:polis_islem_egm_iletisim.php?durum=ok");

	} else {

		Header("Location:polis_islem_egm_iletisim.php?durum=no");
	}

}

if (@$_GET['kayıtsil'] =="ok")

  {

    $sil=$db->prepare("DELETE from egm_iletisim where telefon=:id");
    $kontrol=$sil->execute(array(

        'id' => $_GET['telefon']

    ));

   if($kontrol)
    {
        header("Location:polis_islem_egm_iletisim.php?sil=ok");
    }else
    {
        header("Location:polis_islem_egm_iletisim.php?sil=no");
        
    }

  }


    
  
if (isset($_POST['kimlikekle'])) {


	$ayarekle=$db->prepare("INSERT INTO kisi_listesi SET
	    adi=:adi,
        soyadi=:soyadi,
        dogum_tarihi=:dogum_tarihi,
        dogum_yeri=:dogum_yeri,
        seri_no=:seri_no,
        tc_kimlik_no=:tc_kimlik_no


		");

	$insert=$ayarekle->execute(array(
		'adi' => $_POST['adi'],
        'soyadi' => $_POST['soyadi'],
		'dogum_tarihi' => $_POST['dogum_tarihi'],
		'dogum_yeri' => $_POST['dogum_yeri'],
        'seri_no' => $_POST['seri_no'],
		'tc_kimlik_no' => $_POST['tc_kimlik_no']
        
        
	
		));


	if ($insert) {

		Header("Location:polis_islem_kimlik_bilgileri.php?durum=ok");

	} else {

		Header("Location:polis_islem_kimlik_bilgileri.php?durum=no");
	}

}

if (@$_GET['kimliksil'] =="ok")

  {

    $sil=$db->prepare("DELETE from kisi_listesi where tc_kimlik_no=:id");
    $kontrol=$sil->execute(array(

        'id' => $_GET['tc_kimlik_no']

    ));

   if($kontrol)
    {
        header("Location:polis_islem_kimlik_bilgileri.php?sil=ok");
    }else
    {
        header("Location:polis_islem_kimlik_bilgileri.php?sil=no");
        
    }

  }

  
   
  
  if (isset($_POST['arananekle'])) {



	$ayarekle=$db->prepare("INSERT INTO teror_arananlar SET
	    adi=:adi,
        soyadi=:soyadi,
        dogum_tarihi=:dogum_tarihi,
        dogum_yeri=:dogum_yeri,
        para_odulu=:para_odulu,
        aranan_id=:aranan_id


		");

	$insert=$ayarekle->execute(array(
		'adi' => $_POST['adi'],
        'soyadi' => $_POST['soyadi'],
		'dogum_tarihi' => $_POST['dogum_tarihi'],
        'dogum_yeri' => $_POST['dogum_yeri'],
        'para_odulu' => $_POST['para_odulu'],
		'aranan_id' => $_POST['aranan_id']
        
        
        
	
		));


	if ($insert) {

		Header("Location:polis_islem_teror_arananlar.php?durum=ok");

	} else {

		Header("Location:polis_islem_teror_arananlar.php?durum=no");
	}

}

if (@$_GET['aranansil'] =="ok")

  {

    $sil=$db->prepare("DELETE from teror_arananlar where aranan_id=:id");
    $kontrol=$sil->execute(array(

        'id' => $_GET['aranan_id']

    ));

   if($kontrol)
    {
        header("Location:polis_islem_teror_arananlar.php?sil=ok");
    }else
    {
        header("Location:polis_islem_teror_arananlar.php?sil=no");
        
    }

  }

    
if (isset($_POST['sucekle'])) {


	$ayarekle=$db->prepare("INSERT INTO suc_cesitleri SET
	    konusu=:konusu,
        cezasi=:cezasi
      

		");

	$insert=$ayarekle->execute(array(
		'konusu' => $_POST['konusu'],
        'cezasi' => $_POST['cezasi']

        
	
		));


	if ($insert) {

		Header("Location:polis_islem_suc_cesitleri.php?durum=ok");

	} else {

		Header("Location:polis_islem_suc_cesitleri.php?durum=no");
	}

}

if (@$_GET['sucsil'] =="ok")

  {

    $sil=$db->prepare("DELETE from suc_cesitleri where cezasi=:id");
    $kontrol=$sil->execute(array(

        'id' => $_GET['cezasi']

    ));

   if($kontrol)
    {
        header("Location:polis_islem_suc_cesitleri.php?sil=ok");
    }else
    {
        header("Location:polis_islem_suc_cesitleri.php?sil=no");
        
    }

  }

      
if (isset($_POST['ehliyetekle'])) {

	$ayarekle=$db->prepare("INSERT INTO ehliyet SET
	    ehliyet=:ehliyet,
        tarih=:tarih,
        ehliyet_id=:ehliyet_id,
        tc_kimlik_no=:tc_kimlik_no

      

		");

	$insert=$ayarekle->execute(array(
		'ehliyet' => $_POST['ehliyet'],
        'tarih' => $_POST['tarih'],
        'ehliyet_id' => $_POST['ehliyet_id'],
        'tc_kimlik_no' => $_POST['tc_kimlik_no']





	
		));


	if ($insert) {

		Header("Location:polis_islem_ehliyet_durumu.php?durum=ok");

	} else {

		Header("Location:polis_islem_ehliyet_durumu.php?durum=no");
	}

}


if (@$_GET['ehliyetsil'] =="ok")

  {

    $sil=$db->prepare("DELETE from ehliyet where ehliyet_id=:id");
    $kontrol=$sil->execute(array(

        'id' => $_GET['ehliyet_id']

    ));

   if($kontrol)
    {
        header("Location:polis_islem_ehliyet_durumu.php?sil=ok");
    }else
    {
        header("Location:polis_islem_ehliyet_durumu.php?sil=no");
        
    }

  }

        
if (isset($_POST['cezaekle'])) {

	$ayarekle=$db->prepare("INSERT INTO trafik_cezalari SET
	    plaka=:plaka,
        alinan_ceza=:alinan_ceza,
        yer_ceza_sebebi=:yer_ceza_sebebi,
        trafik_id=:trafik_id,
        tc_kimlik_no=:tc_kimlik_no

      

		");

	$insert=$ayarekle->execute(array(
		'plaka' => $_POST['plaka'],
        'alinan_ceza' => $_POST['alinan_ceza'],
        'yer_ceza_sebebi' => $_POST['yer_ceza_sebebi'],
        'trafik_id' => $_POST['trafik_id'],
        'tc_kimlik_no' => $_POST['tc_kimlik_no']


	
		));


	if ($insert) {

		Header("Location:polis_islem_trafik_cezalari.php?durum=ok");

	} else {

		Header("Location:polis_islem_trafik_cezalari.php?durum=no");
	}

}


if (@$_GET['cezasil'] =="ok")

  {
 
    $sil=$db->prepare("DELETE from trafik_cezalari where trafik_id=:id");
    $kontrol=$sil->execute(array(

        'id' => $_GET['trafik_id']

    ));

   if($kontrol)
    {
        header("Location:polis_islem_trafik_cezalari.php?sil=ok");
    }else
    {
        header("Location:polis_islem_trafik_cezalari.php?sil=no");
        
    }

  }

  if (isset($_POST['sabikaekle'])) {

	$ayarekle=$db->prepare("INSERT INTO sabika_kaydi SET
	    tarih=:tarih,
        alinan_ceza=:alinan_ceza,
        islenen_suc=:islenen_suc,
        sabika_id=:sabika_id,
        tc_kimlik_no=:tc_kimlik_no

      

		");

	$insert=$ayarekle->execute(array(
		'tarih' => $_POST['tarih'],
        'alinan_ceza' => $_POST['alinan_ceza'],
        'islenen_suc' => $_POST['islenen_suc'],
        'sabika_id' => $_POST['sabika_id'],
        'tc_kimlik_no' => $_POST['tc_kimlik_no']



		));


	if ($insert) {

		Header("Location:polis_islem_sabika_kaydi.php?durum=ok");

	} else {

		Header("Location:polis_islem_sabika_kaydi.php?durum=no");
	}

}


if (@$_GET['sabikasil'] =="ok")

  {

    $sil=$db->prepare("DELETE from sabika_kaydi where sabika_id=:id");
    $kontrol=$sil->execute(array(

        'id' => $_GET['sabika_id']

    ));

   if($kontrol)
    {
        header("Location:polis_islem_sabika_kaydi.php?sil=ok");
    }else
    {
        header("Location:polis_islem_sabika_kaydi.php?sil=no");
        
    }

  }

  
if (isset($_POST['vatandasgiris'])) {


	
    echo $tc_kimlik_no=htmlspecialchars($_POST['tc_kimlik_no']); 
    echo $seri_no=$_POST['seri_no']; 
    
    
    
    $kimliksor=$db->prepare("SELECT * from kisi_listesi where tc_kimlik_no=:tc_kimlik_no  and seri_no=:seri_no");
    $kimliksor->execute(array(
        'tc_kimlik_no' => $tc_kimlik_no,
        'seri_no' => $seri_no
        ));
    
    
   echo $say=$kimliksor->rowCount();
    
    
    
    if ($say==1) {
    
        
		echo $_SESSION['tc_kimlik_no']=$tc_kimlik_no;
        header("Location:vatandas_menü.php?tc_kimlik_no=$tc_kimlik_no");
        exit;

    } else {
    
    
        Header("Location:vatandas_giris.php?durum=basarisizgiris");
        
    
    }
} 
    
?>