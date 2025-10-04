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

      if (isset($_POST['user'])) {
          $email = $_POST['email'];
          $pass = $_POST['pass'];
          //$hashedPass = sha1($pass);

     //   echo"1";

          $stmt = $con->prepare("SELECT 
                                      id, email, pass
                                  FROM 
                                  user
                                  WHERE 
                                  email = ? 
                                  AND 
                                    pass = ?");

          $stmt->execute(array($email, $pass));

          $get = $stmt->fetch();

          $count = $stmt->rowCount();
         // echo"2";
          // If Count > 0 This Mean The Database Contain Record About This Username
          //header('Location:profile.php'); // Redirect To Dashboard Page
          if ($count > 0) {
            ob_start();
            session_start();
          $_SESSION['email'] = $email; // Register Session Name

            $_SESSION['v'] = $get['id']; // Register User ID in Session
            ob_start();
            session_start();
              header('Location:discussion.php'); // Redirect To Dashboard Page

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
        <div class="col-md-4 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
          تسجيل الدخول للمشاركة في حلقات النقاش
              </h2>
              
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"   method="post" name="user">
              <div>
               <div>
                <input type="email"  name="email" placeholder="بريد الالكتروني" />
              </div>
              <div>
                <input type="password" name="pass" placeholder="كلمة المرور" />
              </div>
            
              <div class="d-flex ">
              <h6><a href="signup.php">
     انشاء حساب
    </a></h6>
                <button type="submit" name="user">
                دخول
                </button>
               
                <br><br>
                
              </div>
             
            </form>
            
          </div>
        </div>
       
      </div>
      
        <div class="col-md-2 px-0">
          <div class="mr">
            <div class="map-responsive">
              
            
          </div>
          
        </div>
        <div class="col-md-4 px-0">
          <div class="mr">
            <div class="map-responsive">
              
              <img src="images/pet-img.png" alt="" weidth="920dp" height="420dp">
          </div>
          
        </div>
    </div>
  </section>

  <!-- end contact section -->


 
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