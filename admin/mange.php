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
       
            <?php    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

if ($do == 'main') {
  ?>
            <section class="us_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
<h3 >الحملات</h3>
    <?php   


         $getmaseg = $con->prepare("SELECT *
       
         
     FROM fundraising
 
    
      ");
                           $getmaseg->execute();
                            $get = $getmaseg->fetchAll();?>
                               <form action="search.php?do=main"   method="post" >
          
          <input type="text"  name="date" placeholder="رقم نسلسلي" />
  
      
      
    
          <button type="submit" >
   بحث
          </button>
</form>
                          <table class="main-table manage-members text-center table table-bordered">
						<tr>
             <td>رقم التسلسلي</td>
							<td>اسم الحملة</td>
              <td>نوع الحملة</td>
              <td>المدينة</td>
              <td>المبلغ المطلوب</td>
             <td>تاريخ بداية الحمله</td>
              <td>تاريخ نهاية الحمله</td>
              <td> </td>
        
              
           
                            
    <?php  foreach($get as $r){?>
     
  
       <?php
       echo "<tr>";
		 							
                  echo "<td>" . $r['serial'] . "</td>";
                  echo "<td>" . $r['name'] . "</td>";
                  echo "<td>" . $r['type'] . "</td>";
                  echo "<td>" . $r['city'] . "</td>";
                  echo "<td>" . $r['price'] ," ","دينار". "</td>";
                  echo "<td>" . $r['start'] . "</td>";
                  echo "<td>" . $r['end'] . "</td>";
                  echo "<td>
									
                  <a href='?do=delate&id=" . $r['id'] . "' class='btn btn-success confirm'><i class='fa fa-close'></i>حذف</a>";
    
             
                  ?>
      <?php }?>
      </div></div>
    </section>
          <?php }elseif($do=='delate'){
            	$Id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

                $stmt = $con->prepare("DELETE FROM fundraising WHERE id = :zid");

                $stmt->bindParam(":zid", $Id);

                $stmt->execute();
                header('Location:mange.php?do=main'); 
				
          } ?>
  
    <!-- end header section -->
  </div>

  <!-- contact section -->

 

  <!-- end contact section -->


  
</body>

</html>