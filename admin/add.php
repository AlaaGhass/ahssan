<!DOCTYPE html>
<html>
<?php
    ob_start();
    session_start();
    $pageTitle = 'signup';
    if (isset($_SESSION['UserName'])) {
        header('Location: home.php');
    }
    include 'connect.php';

    
    
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $now = new DateTime();   
      $serial=$now->format('YmdHis');
     
    $formErrors = array();

            $name   = $_POST['name'];
            $type   = $_POST['type'];
            $city   = $_POST['city'];
            $price   = $_POST['price'];
            $datiles   = $_POST['datiles'];
            $start   = $_POST['start'];
            $end   = $_POST['end'];
            $image = time() . '-' . $_FILES["image"]["name"];


            // For image upload
            $target_dir = "../imageUp/";
        //    $target_f = "../file/";
            $target_im = $target_dir . basename($image);
          //  $target_f = $target_dir . basename($file);
        
         ///   if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_f)) {
          $file = time() . '-' . $_FILES["file"]["name"];

    // For image upload
    $target_d = "../file/";
    $target_file = $target_d . basename($file);
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_im)) {

$stmt = $con->prepare("INSERT INTO 
fundraising(name,type,city,datiles,image,file,price,serial,start,end)
VALUES(:cname,:ctype,:ccity,:cdatiles,:cimage,:cfile,:cprice,:zserial,:zstart,:zend)");     
$stmt->execute(array(

'cname' => $name,      //values html username
'ctype' => $type,
'cfile' => $file,
'ccity'=> $city, 
'cprice'=> $price, 
'cimage'=> $image, 
'zserial'=> $serial,

'zstart'=> $start, 
'zend'=> $end,

'cdatiles'=> $datiles 

)); 
}else{
  echo "error";
}}


echo '<div class="alert alert-success" role="alert">',"تم اضافة بيانات بنجاح",'</div>';
}



          ?>
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

  <!-- about section -->

 

  <!-- end about section -->

  <!-- ani section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
          اضافة حملة
              </h2>
      
              <h2><a href="mange.php?do=main">
                الحملات
</a></h2>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <div>
       
             
              
              <div class="row">
                <div class="col">
                <input type="text" name="name" placeholder="اسم الحملة" />
              </div>
              <div class="col">
                <input type="text" name="price" placeholder="المبلغ المطلوب" />
              </div>
              <div class="col">
                <select class="form-control" name="city" id="exampleFormControlSelect1">
                  <option>المدينة</option>
                  <option>جنين</option>
                  <option>القدس</option>
                  <option>غزه</option>
                  <option>رام الله</option>
                  <option>نابلس</option>
                  <option>طولكرم</option>
                  <option>سلفيت</option>
                  <option>قلقيلية</option>
             
                </select>
              </div>
              </div>
              <div class="row">
                <div class="col"  style="text-align:right">
                تاريخ بداية الحمله
                <input type="date" name="start" placeholder="تاريخ بداية الحمله" />
              </div>
              <div class="col" style="text-align:right">
             تاريخ نهاية الحمله
                <input type="date" name="end" placeholder="تاريخ نهاية الحمله" />
              </div>
              </div>
              <div>
                
                <select class="form-control" name="type" id="exampleFormControlSelect1">
                  <option> نوع الحملة</option>
                  <option> زكاة</option>
                  <option> صدقة</option>
                  <option> رعاية ايتام</option>
                  <option> كفارة</option>
                  <option>الانعام</option>
                  <option> اوقاف</option>
                  <option>طارئ</option>
                 </select>
              </div><br>
        
              <div>
              
                <input type="text" class="message-box" name="datiles" placeholder="تفاصيل عن الحمله" />
              </div>
              <div  style="text-align: right;">
              <label for="img">اختر صورة </label>
              <input type="file" accept="image/*" name="image" id="img" class="form-control" >
              </div>
              <div  style="text-align: right;">
              <label for="file">ارفق مستند</label>
              <input type="file"  name="file" id="file" class="form-control" >
              </div>
              <div class="d-flex ">
                <button type="submit">
               اضافة
                </button>
                <br><br>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
             <img src="images/de.png" alt="">
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end ani section -->

  <!-- pet section -->

 

  <!-- end pet section -->

  <!-- us section -->

     

  



  <!-- end client section -->

  




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