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
            <ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" href="home.php">الرئيسية</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">خدمة المستفيد</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="logout.php">تسجيل الخروج</a>
  </li>
  
</ul>
<body>
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
                  <a href="logout.php">تسجيل الخروج</a>
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
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1" style="padding-right: 0px;padding-left: 2%;">
                  <div class="detail-box" >
                    <div class="number">
                      <h5>
                        01
                      </h5>
                    </div>
                    <h1>
                     إحسان<br>
                      <span>
                        قال تعالى: ﴿ الَّذِينَ يُنْفِقُونَ أَمْوَالَهُمْ بِاللَّيْلِ وَالنَّهَارِ سِرًّا وَعَلَانِيَةً فَلَهُمْ أَجْرُهُمْ عِنْدَ رَبِّهِمْ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ ﴾ [البقرة: 274]
                      </span>
                     
                    </h1>
                   
                    <div class="btn-box">
                     
                    <a href="contact.php" class="btn-1">
                     خدمة المستفيد
                      </a>
                
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1" style="padding-right: 0px;padding-left: 2%;">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        02
                      </h5>
                    </div>
                    <h1>
                     إحسان <br>
                      <span>
                        قال  صلى الله عليه وسلم: (مَنْ سَنَّ فِي الْإِسْلَامِ سُنَّةً حَسَنَةً، فَلَهُ أَجْرُهَا، وَأَجْرُ مَنْ عَمِلَ بِهَا بَعْدَهُ، مِنْ غَيْرِ أَنْ يَنْقُصَ مِنْ أُجُورِهِمْ شَيْءٌ)
                      </span>
                    </h1>
                  
                    <div class="btn-box">
                    <a href="contact.php.php" class="btn-1">
                     خدمة المستفيد
                      </a>
                      <a href="discussion.php" class="btn-1">
                     اضافة ردود
                             </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1" style="padding-right: 0px;padding-left: 2%;">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        03
                      </h5>
                    </div>
                    <h1>
                      إحسان <br>
                      <span>
                        قال تعالى: ﴿ الَّذِينَ يُنْفِقُونَ أَمْوَالَهُمْ بِاللَّيْلِ وَالنَّهَارِ سِرًّا وَعَلَانِيَةً فَلَهُمْ أَجْرُهُمْ عِنْدَ رَبِّهِمْ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ ﴾ [البقرة: 274]
                      </span>
                     </h1>
                   
                     <div class="btn-box">
                     <a href="contact.php.php" class="btn-1">
                     خدمة المستفيد
                      </a>
                         
                      <a href="discussion.php" class="btn-1">
                     اضافة ردود
                             </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1" style="padding-right: 0px;padding-left: 2%;">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        04
                      </h5>
                    </div>
                    <h1>
                      إحسان <br>
                       <span>
                         قال  صلى الله عليه وسلم: (مَنْ سَنَّ فِي الْإِسْلَامِ سُنَّةً حَسَنَةً، فَلَهُ أَجْرُهَا، وَأَجْرُ مَنْ عَمِلَ بِهَا بَعْدَهُ، مِنْ غَيْرِ أَنْ يَنْقُصَ مِنْ أُجُورِهِمْ شَيْءٌ)
                       </span>
                     </h1>
                   
                     <div class="btn-box">
                      <a href="contact.php" class="btn-1">
                        خدمة المستفيد
                         </a>
                        
                         <a href="discussion.php" class="btn-1">
                     اضافة ردود
                             </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="images/heading-img.png" alt="">
          <h1>
            إحسان <br>
            <span>
              قال تعالى: ﴿ الَّذِينَ يُنْفِقُونَ أَمْوَالَهُمْ بِاللَّيْلِ وَالنَّهَارِ سِرًّا وَعَلَانِيَةً فَلَهُمْ أَجْرُهُمْ عِنْدَ رَبِّهِمْ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ ﴾ 
            
            </span>
            <span style="font-size: small;"> [البقرة: 274]</span>
           </h1>
         
         
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- ani section -->

  <section class="animal_section layout_padding">
    <div class="container">
      <div class="animal_container">
        <div class="box b1">
          <div class="img-box">
           <img src="images/03.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            <?php
				                  	$stmt2 = $con->prepare("SELECT COUNT(completed) FROM fundraising");

	       	                        $stmt2->execute();

		                           $countItems=  $stmt2->fetchColumn();
					
									 echo $countItems; ?>
            </h5>
            <p>
            عدد البرامج المتاحة
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
              <img src="images/01.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            <?php 
				                  	$stmt2 = $con->prepare("SELECT COUNT(completed) FROM fundraising WHERE completed=1");

	       	                        $stmt2->execute();

		                           $countItems=  $stmt2->fetchColumn();
					
									 echo $countItems; ?>
            </h5>
            <p>
             فرص تبرع مكتملة
            </p>
          </div>
        </div>
        <div class="box b1">
          <div class="img-box">
             <img src="images/02.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            <?php
				                  	$stmt2 = $con->prepare("SELECT COUNT(id) FROM pay");

	       	                        $stmt2->execute();

		                           $countItems=  $stmt2->fetchColumn();
					
									 echo $countItems; ?>
            </h5>
            <p>
            عدد العمليات التبرعية
            </p>
          </div>
        </div>
       
      </div>
    </div>
  </section>

  <!-- end ani section -->

  <!-- pet section -->

  <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/pet-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
              منصة إحسان
              </h2>
            </div>
            <p style="text-align: right;">
              منصة لجمع تبرعات الى المحتاجين في شتى مناطق الضفة الغربية وقطاع غزه، وذلك بسبب الاوضاع الراهنة في فلسطين بسبب الاحتلال الإسرائيلي والمآسي التي يسببها للشعب الفلسطيني، من خلال عملية تبرع امنة وشفافة تحت مظلة اوراق ثبوتية ودلائل تثبت حاجة المحتاجين.     </p>
            <div class="btn-box">
              <a href="">
                <span>
                  مشاركة
                </span>
                <img src="images/link-arrow.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end pet section -->

  <!-- us section -->

  

  <!-- end food section -->

  
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