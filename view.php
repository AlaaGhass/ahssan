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

ob_start();
session_start();
          include 'connect.php';
        if (isset($_SESSION['v'])) {
            $sessionUser = $_SESSION['v'];
          //  echo $_SESSION['v'];
              $getUser = $con->prepare("SELECT * FROM user WHERE id = ?");
              $getUser->execute(array($sessionUser));
               $info = $getUser->fetch();
               $userid = $info['id'];
             //  echo  $info['id'];
           
             ?>
<body class="sub_page">
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
          </a>
          <div class="" id="">
          

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">الرئيسة</a>
                <a href="about.php">من نحن</a>
                <a href="contact.php">
                  خدمة المستفيدين</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1" style="padding-right: 0px;padding-left: 2%;">
                  <div class="detail-box" >
           
      
        

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->



  <!-- end about section -->




  <!-- food section -->

  
        <?php
          include 'connect.php';
          $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
     
          $Id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0; 

          if ($do == 'main') {

      $stmt = $con->prepare("  SELECT comments.*,
                                discussion.name AS named
                       
                          FROM comments 

                          INNER JOIN discussion
                          ON 
                          discussion.id=comments.dis
                          WHERE
                          comments.dis=$Id
                         ");

                        
$stmt->execute();
$rows = $stmt->fetch();?>



  <!-- end food section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
        <h2 style="text-align:right; color:#0e1e6c">
       اضف رد
        </h2>
        <p>
       </p>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <h3 style="color:e; text-align:right">
         <?php echo $rows['named']?>
            </h3>
      <?php
     

      $stmt = $con->prepare("  SELECT comments.*,
                                discussion.name AS named
                       
                          FROM comments 

                          INNER JOIN discussion
                          ON 
                          discussion.id=comments.dis
                          WHERE
                          comments.dis=$Id
                         ");

                        
$stmt->execute();
$rows = $stmt->fetchAll();
foreach($rows as $r){?>


     
            
   
      <?php } ?>

 
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>"   method="post" style="text-align:right">
            <div class="form-group">
   <!-- <label for="exampleFormControlTextarea1"><h3>اضافة تعليق </h3></label> -->
    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
  <input name="name" type="hidden" value="<?php echo $info['name']?>">
  <input name="email" type="hidden" value="<?php echo $info['email']?>">
  <input name="dis" type="hidden" value="<?php echo $r['dis']?>">
  <button type="submit" class="btn btn-primary mb-2">اضافة تعليق </button>
            </form>
    </div><?php }
?>
  <?php
include 'connect.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    
    $text   = $_POST['text'];
    $dis   = $_POST['dis'];
    $name   = $_POST['name'];
    $email   = $_POST['email'];
    $stmt = $con->prepare("INSERT INTO comments(comments,dis,name,email)VALUES(:zcomments,:zdis,:zname,:zemail)");
    $stmt->execute(array(
        'zcomments'=>$text,
        'zname'=>$name,
        'zemail'=>$email,
        'zdis'=>$dis
    ));
    header('Location:discussion.php');

}
          
            ?>



  
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

</body>

</html>
<?php

} else {
	header('Location: login.php');
	exit();
	}
//	include 'includes/footer.php';
	ob_end_flush();
?>