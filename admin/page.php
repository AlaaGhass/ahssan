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
<style>
    .navbar {
  background-color: #3b5998;
  font-size: 22px;
  padding: 5px 10px;
}

/* Define what each icon button should look like */
.button {
  color: white;
  display: inline-block; /* Inline elements with width and height. TL;DR they make the icon buttons stack from left-to-right instead of top-to-bottom */
  position: relative; /* All 'absolute'ly positioned elements are relative to this one */
  padding: 2px 5px; /* Add some padding so it looks nice */
}

/* Make the badge float in the top right corner of the button */
.button__badge {
  background-color: #fa3e3e;
  border-radius: 2px;
  color: white;
 
  padding: 1px 3px;
  font-size: 10px;
  
  position: absolute; /* Position the badge within the relatively positioned button */
  top: 0;
  right: 0;
}
    </style>
<?php 
include 'connect.php';
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
  <section class="us_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <br><br>  <br><br>  <br><br>
      
      </div>
      <div class="us_container">
        <div class="box">
         
          <div class="img2-box">
            <img src="images/11.png" alt="">
          </div> <?php
               	$stmt2 = $con->prepare("SELECT COUNT(id) FROM pageinstitution WHERE nots=0");

                 $stmt2->execute();

             $countIhand2=  $stmt2->fetchColumn();
            
					
									  ?>
          <div class="detail-box">
           <a href="pageInstitution.php"> <h6>
           مستفيد مؤسسة
            </h6> </a>
            <div class="button">
    <i class="fa fa-comments"></i>
    <span class="button__badge"><?php echo  $countIhand2; ?></span>
  </div> </h6> </a>
         </div>
          </div>
        
        <div class="us_container">
        <div class="box">
         
          <div class="img2-box">
            <img src="images/14.png" alt="">
          </div>
          <div class="detail-box"> <?php
              

				                  	$stmt = $con->prepare("SELECT COUNT(id) FROM page_user WHERE nots=0");

	       	                        $stmt->execute();

		                           $countIhand=  $stmt->fetchColumn();
		                           $countsIhand=$countIhand;
                             
					
									  ?>
           <a href="pageUser.php"> <h6>
           مستفيد فرد    
           <div class="button">
    <i class="fa fa-comments"></i>
    <span class="button__badge"><?php echo $countsIhand; ?></span>
  </div> </h6> </a>
          </div>
        </div>
        </div>
      </div></div></section>
  

  <!-- end ani section -->

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