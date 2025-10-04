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

    <!-- end header section -->
 

  <!-- about section -->

 
  <!-- end about section -->

  <!-- ani section -->

  <?php
          include 'connect.php';
          $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
     
     
          if ($do == 'auqaf') {?>
            <section class="food_section layout_padding" id="upd">
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
        <h2>
        حملات التبرعات
        </h2>
        <p>
         نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
        </p>
      </div>
      <div class="food_container">
            <?php
        
       
     $a="اوقاف";
      $stmt = $con->prepare("SELECT * FROM fundraising  WHERE type=?");

                        
$stmt->execute(array($a));
$row = $stmt->fetchAll();
foreach($row as $r ){?>

           <div class="box">
          <div class="img-box">
            <img src="imageUp/<?php echo $r['image']?>" alt="">
          </div>
          <div class="detail-box">
            <h6>
         <?php echo $r['name']?>
            </h6>
            <h3>
           <!--   <span>$</span>100-->
            </h3>
            <a href="pay.php?do=main&id=<?php echo $r['id']?>">
            تبرع الآن
            </a>
          </div>
        </div>
        <?php } ?>
        </div>
    </div>
  </section>
          <?php }elseif ($do == 'sadqa') {?>
                <section class="food_section layout_padding" id="upd">
        <div class="container">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
            حملات التبرعات
            </h2>
            <p>
             نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
            </p>
          </div>
          <div class="food_container">
                <?php
            
           
         $a="صدقة";
          $stmt = $con->prepare("SELECT * FROM fundraising  WHERE type=?");
    
                            
    $stmt->execute(array($a));
    $row = $stmt->fetchAll();
    foreach($row as $r ){?>
    
               <div class="box">
              <div class="img-box">
                <img src="imageUp/<?php echo $r['image']?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
             <?php echo $r['name']?>
                </h6>
                <h3>
               <!--   <span>$</span>100-->
                </h3>
                <a href="pay.php?do=main&id=<?php echo $r['id']?>">
                تبرع الآن
                </a>
              </div>
            </div>
            <?php } ?>
            </div>
        </div>
      </section>
              <?php }elseif ($do == 'zaqa') {?>
                <section class="food_section layout_padding" id="upd">
        <div class="container">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
            حملات التبرعات
            </h2>
            <p>
             نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
            </p>
          </div>
          <div class="food_container">
                <?php
            
           
         $a="زكاة";
          $stmt = $con->prepare("SELECT * FROM fundraising  WHERE type=?");
    
                            
    $stmt->execute(array($a));
    $row = $stmt->fetchAll();
    foreach($row as $r ){?>
    
               <div class="box">
              <div class="img-box">
                <img src="imageUp/<?php echo $r['image']?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
             <?php echo $r['name']?>
                </h6>
                <h3>
               <!--   <span>$</span>100-->
                </h3>
                <a href="pay.php?do=main&id=<?php echo $r['id']?>">
                تبرع الآن
                </a>
              </div>
            </div>
            <?php } ?>
            </div>
        </div>
      </section>
              <?php }elseif ($do == 'aytam') {?>
                <section class="food_section layout_padding" id="upd">
        <div class="container">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
            حملات التبرعات
            </h2>
            <p>
             نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
            </p>
          </div>
          <div class="food_container">
                <?php
            
           
         $a="رعاية ايتام";
          $stmt = $con->prepare("SELECT * FROM fundraising  WHERE type=?");
    
                            
    $stmt->execute(array($a));
    $row = $stmt->fetchAll();
    foreach($row as $r ){?>
    
               <div class="box">
              <div class="img-box">
                <img src="imageUp/<?php echo $r['image']?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
             <?php echo $r['name']?>
                </h6>
                <h3>
               <!--   <span>$</span>100-->
                </h3>
                <a href="pay.php?do=main&id=<?php echo $r['id']?>">
                تبرع الآن
                </a>
              </div>
            </div>
            <?php } ?>
            </div>
        </div>
      </section>
              <?php }elseif ($do == 'qfart') {?>
                <section class="food_section layout_padding" id="upd">
        <div class="container">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
            حملات التبرعات
            </h2>
            <p>
             نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
            </p>
          </div>
          <div class="food_container">
                <?php
            
           
         $a="كفارة";
          $stmt = $con->prepare("SELECT * FROM fundraising  WHERE type=?");
    
                            
    $stmt->execute(array($a));
    $row = $stmt->fetchAll();
    foreach($row as $r ){?>
    
               <div class="box">
              <div class="img-box">
                <img src="imageUp/<?php echo $r['image']?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
             <?php echo $r['name']?>
                </h6>
                <h3>
               <!--   <span>$</span>100-->
                </h3>
                <a href="pay.php?do=main&id=<?php echo $r['id']?>">
                تبرع الآن
                </a>
              </div>
            </div>
            <?php } ?>
            </div>
        </div>
      </section>
      <?php }elseif ($do == 'taraa') {?>
                <section class="food_section layout_padding" id="upd">
        <div class="container">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
            حملات التبرعات
            </h2>
            <p>
             نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
            </p>
          </div>
          <div class="food_container">
                <?php
            
           
         $a="طارئ";
          $stmt = $con->prepare("SELECT * FROM fundraising  WHERE type=?");
    
                            
    $stmt->execute(array($a));
    $row = $stmt->fetchAll();
    foreach($row as $r ){?>
    
               <div class="box">
              <div class="img-box">
                <img src="imageUp/<?php echo $r['image']?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
             <?php echo $r['name']?>
                </h6>
                <h3>
               <!--   <span>$</span>100-->
                </h3>
                <a href="pay.php?do=main&id=<?php echo $r['id']?>">
                تبرع الآن
                </a>
              </div>
            </div>
            <?php } ?>
            </div>
        </div>
      </section>
              <?php }elseif ($do == 'anaam') {?>
                <section class="food_section layout_padding" id="upd">
        <div class="container">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
            حملات التبرعات
            </h2>
            <p>
             نسعى دائما ان نزرع امل في قلوب الجميع، من خلال تكثيف حملات التبرعات
            </p>
          </div>
          <div class="food_container">
                <?php
            
           
         $a="الانعام";
          $stmt = $con->prepare("SELECT * FROM fundraising  WHERE type=?");
    
                            
    $stmt->execute(array($a));
    $row = $stmt->fetchAll();
    foreach($row as $r ){?>
    
               <div class="box">
              <div class="img-box">
                <img src="imageUp/<?php echo $r['image']?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
             <?php echo $r['name']?>
                </h6>
                <h3>
               <!--   <span>$</span>100-->
                </h3>
                <a href="pay.php?do=main&id=<?php echo $r['id']?>">
                تبرع الآن
                </a>
              </div>
            </div>
            <?php } ?>
            </div>
        </div>
      </section>
              <?php }?>
          </div>
        </div>
        



  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; تم الانشاء سنة 2023
      <a href="">جامعة القدس المفتوحة</a>
    </p>
  </section>
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