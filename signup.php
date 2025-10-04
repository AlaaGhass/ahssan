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

 
    $name   = $_POST['name'];
    

    $email   = $_POST['email'];
    $password   = $_POST['pass'];


   


    if (isset($email)) { //user is min in 4 characters

      $filterUser = filter_var($user, FILTER_SANITIZE_STRING);

      if (strlen($filterUser) < 9) {

          echo  "لا يمكن لكلمة  لرقم الهوية ان يكون اقل من 9 خانات";

      }

  }

  //  if (isset($password) && isset($password2)) {

        if (empty($password)) { //Do you password is empty?

            echo  'لا يمكن لكلمة المرور ان تكون فارغة'; // print message password is empty

        }

      

    
    if (isset($email)) {

        $filterdEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (filter_var($filterdEmail, FILTER_VALIDATE_EMAIL) != true) {

           echo  'هذا البريد غير صحيح';

        }

    }

    

    if (empty($formErrors)) {

       

       // $check = checkItem("UserName", "customer", $username);


    // If Count > 0 This Mean The Database Contain Record About This Username

     $stmtL = $con->prepare("SELECT    id
                            FROM 
                                user
                            WHERE 
                               id = ? 
                          
                            ");

    $stmtL->execute(array($email));

    $getL = $stmtL->fetch();

    $countL = $stmtL->rowCount();



    if ($countL > 0) {
        echo "<br>","<br>","<br>","<br>","<h1 >", " هذا الحساب موجود بالفعل" ,"</h1>";
    }else{

            // Insert User In Database

            $stmt = $con->prepare("INSERT INTO 
                                    user(name,email,pass)
                                VALUES(:zname,:zemail,:zpassword)");     
            $stmt->execute(array(

                'zname' => $name,      //values html username
                'zpassword' => $password,
               
                'zemail' => $email ));      


                             

            

            //  Success Insert
//     echo'<div class="alert alert-success" role="alert">';
            echo "<h1>","تم إنشاء حسابك بنجاح ","<a herf='login.php'>قم بتسجيل الدخول</a>","</h1>";
     
          //  echo "</div>";
           // $succesMsg = 'Congrats You Are Now Registerd User';
      header('Location:login.php');


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
        انشاء حساب للمشاركة في حلقات النقاش
              </h2>
              
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"   method="post" name="user">
              <div>
               <div>
                <input type="email"  name="email" placeholder="البريد الالكتروني" />
              </div>
              <div>
                <input type="text"  name="name" placeholder="الاسم" />
              </div>
              <div>
                <input type="password" name="pass" placeholder="كلمة المرور" />
              </div>
            
              <div class="d-flex ">
              <h6><a href="signup.php">
 تسجيل الدخول
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