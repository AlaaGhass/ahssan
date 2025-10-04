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
                  تسجيل الدخول</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <ul class="nav justify-content-center">
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">الرئيسية</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="more.php">الحملات</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="discussion.php">المناقشات</a>
  </li>
 
  
</ul>
  <!-- contact section -->
<style>
  .required :after { 
    content:" *"; 
  color: #e32;
  position: absolute; 
  margin: 0px 0px 0px -20px; 
  font-size: xx-large; 
  padding: 0 5px 0 0; 
 
 }
</style>
<?php
    ob_start();
    session_start();
   
    include 'connect.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     
    $formErrors = array();

            $name   = $_POST['name'];
            $countSingulr   = $_POST['countSingulr'];
            $countDisease   = $_POST['countDisease'];
            $details   = $_POST['details'];
            $phone   = $_POST['phone'];
            $type   = $_POST['type'];
            $email   = $_POST['email'];
            $active   = $_POST['active'];
         
            $num   = $_POST['num'];
            $location   = $_POST['location'];
          
            
            $file = time() . '-' . $_FILES["file"]["name"];

            // For image upload
            $target_d = "file/";
            $target_file = $target_d . basename($file);
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

$stmt = $con->prepare("INSERT INTO 
pageinstitution(name,countSingulr,countDisease,details,email,type,phone,active,num,location)
VALUES(:cname,:ccountSingulr,:ccountDisease,:cdetails,:cemail,:ctype,:cphone,:cactive,:cnum,:clocation)");     
$stmt->execute(array(

'cname' => $name,      //values html username
'ccountSingulr' => $countSingulr,
'ccountDisease'=> $countDisease, 
'cdetails'=> $details, 
'cemail'=> $email, 
'ctype'=> $type, 
'cphone'=> $phone, 

'cnum'=> $num, 
'clocation'=> $location, 

'cactive'=> $active



)); 
}else{
  echo "error";
}
echo '<div class="alert alert-success" role="alert">',"تم ارسال البيانات بنجاح",'</div>';
}



          ?>
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
              بكل سرية 
              </h2>
              <p style="text-align: right;">
              قال رسول الله صلى الله عليه وسلم:  «مَثَلُ المُؤْمِنِينَ في تَوَادِّهِمْ وتَرَاحُمِهِمْ وتَعَاطُفِهِمْ، مَثَلُ الجَسَدِ إذا اشْتَكَى مِنْهُ عُضْوٌ تَدَاعَى له سَائِرُ الجَسَدِ بالسَّهَرِ والحُمَّى»، ،، أخي العزيز اختي العزيزه نحن أخوة  لا تتردد في مراسلتنا 
              <span style="font-size: 20px; color: #986422; background-color:#0e1e6css">
               <a href="contact.php" style=" font-size: 20px; color: #0e1e6c; background-color: #986422;
    border-radius: 35%">    فرد </a>
                <span>/</span>
                <a href="institution.php" style="font-size: 20px; color: #986422; background-color: #e7d619;
    border-radius: 35%"> مؤسسة </a>
              </span></p>
              
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"   method="post" style="color:#0e1e6c" enctype="multipart/form-data">
              <div style="color:#0e1e6c">
                <h4 style="text-align: right;">مؤسسة</h4>
              <div class="row">
                <div class="col">
                <input type="text" name="name" placeholder="اسم المؤسسة" required/>
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <input type="text" name="active" placeholder="نشاط المؤسسة " class="required" required/>
              
                 <span style="margin-left:120pt;color:red;">*</span>
              </div>
              
              </div>
              
              <div class="row">
                <div class="col">
                <input type="text" name="phone" placeholder="رقم الهاتف" required />
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <select class="form-control" name="type" id="exampleFormControlSelect1" required>
                  <option value="">نوع الدعم</option>
                  <option value="دعم مالي">دعم مالي </option>
                  <option value="دعم ملابس"> دعم ملابس</option>
                  <option value="دعم لوازم معيشية"> دعم  لوازم معيشية</option>
                  <option value="دعم ادوية"> دعم  ادوية</option>

                 
                </select>
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              </div>
              <div>
                <input type="email" name="email" placeholder="البرديد الالكتروني" required />
                <span style="margin-left:320pt;color:red;">*</span>
              </div>
              
              <div class="row">
                <div class="col">
                <input type="text" name="countSingulr" placeholder="عدد الافراد" required/>
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <input type="text" name="countDisease" placeholder="عدد الحالاة المزمنة" required/>
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="row">
                <div class="col">
                <input type="text" name="location" placeholder="العنوان" required/>
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <input type="text" name="num" placeholder="رقم حساب البنك" required/>
                <span style="margin-left:120pt;color:red;">*</span>
              </div>  </div>
              
              </div>
              <br>
            
              <div>
              
                <input type="text" name="details" class="message-box" placeholder="اضف تفاصيل" />
              </div>

              <div  style="text-align: right;">
              <label for="file">معززات</label>
              <input type="file"  name="file" id="file" class="form-control" >
              </div>

              <div class="d-flex ">
                <button type="submit">
                ارسال
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