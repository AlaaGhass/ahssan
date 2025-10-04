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


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    
    $text   = $_POST['text'];
    $stmt = $con->prepare("INSERT INTO discussion(name)VALUES(:zname)");
    $stmt->execute(array(
        'zname'=>$text
    ));
    echo '<div class="alert alert-success" role="alert">',"تمت عملية الاضافة بنجاح",'</div>';

}
          
            ?>
<body>
  <div class=" ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="home.php">
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
                <a href="home.php">الرئيسة</a>
                <a href="tabroa.php">التبرعات</a>
                <a href="page.php">   مراسلات المستفيدين</a>
                <a href="add.php">اضافة حملات</a>
                <a href="logout.php">
                  تسجيل الخروج</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
   
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <?php
          include 'connect.php';?>

  

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
         ردود الأشخاص المستفيدين من حملاتنا
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


     
            <div class="box" >
              <div class="img-box" style="height: 50dp; width:50dp">
                <img src="images/client.png" alt="" height= "120dp" width="90dp">
              </div>
              <div class="detail-box" style="text-align: right; padding-right: 8pt;">
                <h4>
                <?php echo $r['name']?> 
              <p style="font-size:12pt;">  <?php echo $r['email']?> </p>
                </h4>
                <p>
                <?php echo $r['comments']?>   </p>
                <img src="images/quote.png" alt="" >
              </div>
            </div>
          </div>
</div>





       
      </div><br>
   
      <?php } ?>
  </section>
 
    </div><?php }
?>
  <?php
include 'connect.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    
    $text   = $_POST['text'];
    $dis   = $_POST['dis'];
    $stmt = $con->prepare("INSERT INTO comments(comments,dis)VALUES(:zcomments,:zdis)");
    $stmt->execute(array(
        'zcomments'=>$text,
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