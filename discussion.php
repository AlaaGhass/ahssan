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
          include 'connect.php';?>
                     <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">الرئيسية</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="more.php">الحملات</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="discussion.php">المناقشات</a>
  </li>
 
  
</ul>
<body>
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
    
  </div>

  <!-- about section -->



  <!-- end about section -->




  <!-- food section -->

  <section class="food_section layout_padding" id="upd" style="height:350pt">
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
        <h2>
حلقات النقاش
        </h2>
        <p>
         نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
        </p>
      </div>
      <div class="food_container">
      <div class="row">
        <?php
          include 'connect.php';
      $stmt = $con->prepare("SELECT * FROM discussion  ");

                        
$stmt->execute();
$rows = $stmt->fetchAll();
foreach($rows as $r){?>
      <div class="col-sm-3">
           <div class="box">
          <div class="img-box">
            <img width="30%" height="30%" src="images/heading-img.png" alt="">
          </div>
          <div class="detail-box">
            <h6 style="color:darkblue">
         <?php echo $r['name']?>
            </h6>  <div class="detail-box">
            <h3>
           <!--   <span>$</span>100-->
            </h3>
            <a href="view.php?do=main&id=<?php echo $r['id']?>">
        الدخول الى حلقة النقاش
            </a>
            </div>
        </div> </div></div>
        <?php } ?>
        
       
      </div>
    </div>
  </section>


  <!-- end food section -->





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