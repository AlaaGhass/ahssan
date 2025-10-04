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

      if (isset($_POST['admin'])) {
          $email = $_POST['user'];
          $pass = $_POST['pass'];
          //$hashedPass = sha1($pass);

        echo"1";

          $stmt = $con->prepare("SELECT 
                                      id, user, pass
                                  FROM 
                                  admin 
                                  WHERE 
                                      user = ? 
                                  AND 
                                    pass = ?");

          $stmt->execute(array($email, $pass));

          $get = $stmt->fetch();

          $count = $stmt->rowCount();
          echo"2";
          // If Count > 0 This Mean The Database Contain Record About This Username
          //header('Location:profile.php'); // Redirect To Dashboard Page
          if ($count > 0) {
            ob_start();
            session_start();
          $_SESSION['email'] = $email; // Register Session Name

            $_SESSION['id'] = $get['id']; // Register User ID in Session

              header('Location:home.php'); // Redirect To Dashboard Page

              exit();
          }elseif ($count = 0) {
           header('Location:index.php');
          }
         
}


          }

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
            <div class="User_option">
             
            </div>

         
          
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
            الادارة
              </h2>
              
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"   method="post" name="admin">
              <div>
               <div>
                <input type="text"  name="user" placeholder="اسم المستخدم" />
              </div>
              <div>
                <input type="password" name="pass" placeholder="كلمة المرور" />
              </div>
            
              <div class="d-flex ">
                <button type="submit" name="admin">
                دخول
                </button>
                <h5><a href="pass.php">
        نسيت كلمة المرور
    </a></h5>
                <br><br>
                
              </div>
             
            </form>
            
          </div>
        </div>
       
      </div>
      <div class="col-md-6 px-0">
          <div class="mr">
            <div class="map-responsive">
              
              <img src="images/heading-img.png" alt="">
          </div>
        </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
             تواصل معنا
            </h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>
               0593849447
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                ahssan@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>
            ساعات العمل
            </h5>
            <div>
              <p>
               يمكنك التواصل معنا يوميا 
              </p>
            </div>
            <div>
              <p>
               من ساعة السابعة الى التاسعة مساءً
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
             منصات التواصل الاجتماعي
            </h5>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form pl-lg-4">
            <h5>
             شارك مع خدمة البريد الالكتروني لتصلك أخر الحملات
            </h5>
            <form action="">
              <input type="text" placeholder="البريد الالكتروني" />
              <button type="submit">
                ارسال
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

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