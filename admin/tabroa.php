<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>إحسان</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<?php

	
	include 'connect.php';


?>	
<body class="sub_page">
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="home.php">
            <img src="images/logo.png" alt="">
          </a>
          <div class="" id="">
            <div class="User_option">
             
            </div>
            </div>
        </nav>
      </div>
    </header>
            <br> <br><br> <br>
<div style="text-align:center; color:#0e1e6c">
           <h3> <a style="text-align:center; color:#0e1e6c" href="tabroa.php?do=main"> تبرعات الالكترونية</a></h3>
           <h3> <a style="text-align:center; color:#0e1e6c" href="tabroa.php?do=requset"> طلبات التبرعات</a> </h3>
</div>
            <?php    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

if ($do == 'main') {
  ?>
            <section class="us_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
<h3 >تبرع الالكتروني</h3>
    <?php   


         $getmaseg = $con->prepare("SELECT pay.*,
        fundraising.name AS namef,
        fundraising.type AS typef,
       
        fundraising.price AS priceF

       
         
     FROM pay 
     INNER JOIN fundraising
     ON 
     fundraising.id = pay.idf
    
      ");
                           $getmaseg->execute();
                            $get = $getmaseg->fetchAll();?>
                          
                          <table class="main-table manage-members text-center table table-bordered">
						<tr>
							
							<td>اسم الحملة</td>
              <td>نوع الحملة</td>
              <td>المبلغ المطلوب</td>
              <td>اسم المتبرع</td>
              <td>رقم البطاقة</td>
           
                            
    <?php  foreach($get as $r){?>
     
  
       <?php
       echo "<tr>";
									
									
                  echo "<td>" . $r['namef'] . "</td>";
                  echo "<td>" . $r['typef'] . "</td>";
                  echo "<td>" . $r['priceF'] . "</td>";
                  echo "<td>" . $r['firstname'] . "</td>";
                  echo "<td>" . $r['cardname'] . "</td>";
                  ?>
      <?php }?>
      </div></div>
    </section>
          
    <?php }elseif($do == 'requset'){?>
      <section class="us_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
<h3 >طلبات التبرعات</h3>
    <?php   


         $getmaseg = $con->prepare("SELECT requst.*,
        fundraising.name AS namef,
        fundraising.type AS typef,
       
        fundraising.price AS priceF

       
         
     FROM requst 
     INNER JOIN fundraising
     ON 
     fundraising.id = requst.idf
    
      ");
                           $getmaseg->execute();
                            $get = $getmaseg->fetchAll();?>
                          
                          <table class="main-table manage-members text-center table table-bordered">
						<tr>
							
							<td>اسم الحملة</td>
              <td>نوع الحملة</td>
              <td>المبلغ المطلوب</td>
              <td>اسم المتبرع</td>
              <td>رقم الهاتف</td>
              <td>العنوان</td>
           
                            
    <?php  foreach($get as $r){?>
     
  
       <?php
       echo "<tr>";
									
									
                  echo "<td>" . $r['namef'] . "</td>";
                  echo "<td>" . $r['typef'] . "</td>";
                  echo "<td>" . $r['priceF'] . "</td>";
                  echo "<td>" . $r['name'] . "</td>";
                  echo "<td>" . $r['phone'] . "</td>";
                  echo "<td>" . $r['location'] . "</td>";
                  ?>
      <?php }?>
      </div></div>
    </section>
    <?php }?>
    <!-- end header section -->
  </div>

  <!-- contact section -->

 

  <!-- end contact section -->


  
</body>

</html>