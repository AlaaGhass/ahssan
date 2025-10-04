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
            <a href="view_comun.php?do=main&id=<?php echo $r['id']?>">
        مشاهدة حلقة النقاش
            </a>
            </div>
        </div> </div></div>
        <?php } ?>
        
       
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