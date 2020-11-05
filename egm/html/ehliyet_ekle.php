<?php
include "../baglan.php";
$ehliyetsor=$db->prepare("SELECT * FROM ehliyet");
$ehliyetsor->execute();
$ehliyetcek=$ehliyetsor->fetch(PDO::FETCH_ASSOC);
?>

<head>
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
    <style>
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

    </style>

</head>
<body style="background-color:#0b1e60ff;color:White;  overflow-y: hidden !important;
  overflow-x: hidden !important;">
    

<div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 style="text-align:center;"> Ehliyet Durumu Kayıt Ekleme <small>

                <?php

                    if(@$_GET['durum'] =="ok")
                    {?>
                       
                        <b style="color:green;"> İşlem Başarılı </b>

                    <?php }
                    
                    elseif(@$_GET['durum'] =="no") 
                    {?>

                        <b style="color:red;"> İşlem Başarısız </b>
                    <?php }

                   
                ?>
                
                
                </small></h2>

              
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="islem.php" method="POST">
                        
                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ehliyet<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" placeholder="Var / Yok / El Konuldu" id="first-name" required="required" class="form-control col-md-7 col-xs-12" 
                          name="ehliyet"  >
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tarih<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="first-name" required="required" class="form-control col-md-7 col-xs-12" 
                          name="tarih"  >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tc Kimlik No<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" 
                          name="tc_kimlik_no"  >
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="right">
                        <div id="geri">
                        <button class="geri" style="vertical-align:middle;" name="ehliyetekle" ><span>Kayıt Ekle </span></button>

                        </div>
                        </div>

                      </div>
                    </div>
                </div>

                    </form>
                              
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="right">
                        <div id="geri">
                        <a href="polis_islem_ehliyet_durumu.php"><button class="geri" style="vertical-align:middle"><span>Geri</span></button></a> 

                        </div>
                        </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>

 </body>
              
           

           