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
<h3 >الحملات مناقشات</h3>
    <?php   


         $getmaseg = $con->prepare("SELECT *
        
     
  
       
         
  FROM discussion 
   
   
 
    
      ");
                           $getmaseg->execute();
                            $get = $getmaseg->fetchAll();?>
                            
                          <table class="main-table manage-members text-center table table-bordered">
						<tr>
                        <td> اسم حملة مناقشات</td>
             
              <td> </td>
        
              
           
                            
    <?php  foreach($get as $r){?>
     
  
       <?php
       echo "<tr>";
		 							
                 
                  echo "<td>" . $r['name'] . "</td>";
               
                  echo "<td>
									
                  <a href='?do=delate&id=" . $r['id'] . "' class='btn btn-success confirm'><i class='fa fa-close'></i>حذف</a>";
    
             
                  ?>
      <?php }?>
      </div></div>
    </section>
          <?php }elseif($do=='delate'){
            	$Id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

                $stmt = $con->prepare("DELETE FROM discussion WHERE id = :zid");

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