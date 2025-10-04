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

  <section class="about_section layout_padding">

    <div class="container">
    <h3 style="text-align:right"><a href="view.php"> مشاهدة الاراء</a></h3>
    <h3 style="text-align:right"><a href="mange_post.php?do=main"> ادارة حلقات النقاش</a></h3>
      <div class="detail-box">
       
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"   method="post">
            <div class="form-group">
    <label for="exampleFormControlTextarea1">إضافة حلقة نقاش على منصة</label>
    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">إضــافه</button>
            </form>
         
      
    </div>
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