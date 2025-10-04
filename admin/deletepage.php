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
  <?php
  include 'connect.php';
  ?>
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
  <?php
 
  $get = $con->prepare("SELECT * FROM pageinstitution WHERE view=1");
$get->execute();

$views =$get->fetchAll(); 
?>
    <section class="about_section layout_padding">
    <div class="container">
  <table class="main-table manage-members text-center table table-bordered">
						<tr>
							
							<td>الاسم</td>
              <td>نشاط</td>
              <td>رقم الهاتف</td>
              <td>البريد الالكتروني</td>
              <td>عدد الافراد</td>
              <td> عدد افراد حالات مزمنه </td>
              <td>تفاصيل</td>
              <td>رقم الحساب البنكي </td>
              <td>العنوان </td>
            
             
            
           
        
              
           
                            
              <?php       foreach($views as $r) {
     
  
      
       echo "<tr>";
									
									
                  echo "<td>" . $r['name'] . "</td>";
                  echo "<td>" . $r['active'] . "</td>";
                  echo "<td>" . $r['phone'] . "</td>";
                  echo "<td>" . $r['email'] . "</td>";
             //     echo "<td>" . $r['serial'] . "</td>";

                  echo "<td>" . $r['countSingulr'] . "</td>";
                  echo "<td>" . $r['countDisease'] . "</td>";
                  echo "<td>" . $r['details'] . "</td>";
                  echo "<td>" . $r['num'] . "</td>";
                  echo "<td>" . $r['location'] . "</td>";?>
                     
                
               
          
    
             
                 
      <?php }?>
  <?php
 
  ?>

  <!-- end ani section -->
</div>

</div>


 
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