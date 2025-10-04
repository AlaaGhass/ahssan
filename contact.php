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
  <?php
    ob_start();
    session_start();
   
    include 'connect.php';
  
    
  ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $formErrors = array();

            $nameF   = $_POST['nameF'];
            $nameS   = $_POST['nameS'];
            $nameT   = $_POST['nameT'];
            $nameM   = $_POST['nameM'];
            $phone   = $_POST['phone'];
            $status   = $_POST['status'];
            $email   = $_POST['email'];
            $location   = $_POST['location'];
            $countFam   = $_POST['countFam'];
            $details= $_POST['details'];
            
            $disease="";
            $house="";
            $house="بيت ملك";

            if( empty( $_POST['disease']) ) {
              $disease="لا يوجد امراض"; 
            }else{
              $details   = "يوجد حالة مرضية";}

         
           
            if( empty( $_POST['house'])){
              $house="بيت ملك"; 
            }else{
              $house   = "بيت ايجار";}
           $img_pers = time() . '-' . $_FILES["imgp"]["name"];
           $img_Illness = time() . '-' . $_FILES["imgi"]["name"];
           $img_house = time() . '-' . $_FILES["imgh"]["name"];
           $target_d = "file/";
           $target_p = "file/";
           $target_i = "file/";
            $target_pers = $target_d . basename($img_pers);
            $target_Illness = $target_p . basename($img_Illness);
            $target_house = $target_i . basename($img_house);
            if(move_uploaded_file($_FILES["imgp"]["tmp_name"], $target_pers)) {
     }else{
echo "";
}
              if(move_uploaded_file($_FILES["imgi"]["tmp_name"], $target_Illness)) {
              }else{
                echo "";
                }
            if(move_uploaded_file($_FILES["imgh"]["tmp_name"], $target_house)) {
            }else{
              echo "";
              }

              $stmt = $con->prepare("INSERT INTO 
              page_user(name_first,name_second,name_thirt,name_family,phone,status,email,countFam,disease,details,house,img_house,img_Illness,img_pers,location)
              VALUES(:cname_first,:cname_second,:cname_thirt,:cname_family,:cphone,:cstatus,:cemail,:ccountFam,:cdisease,:cdetails,:chouse,:cimg_house,:cimg_Illness,:cimg_pers,:clocation)");     
              $stmt->execute(array(

'cname_first' => $nameF,      //values html username
'cname_second' => $nameS,
'cname_thirt'=> $nameT, 
'cname_family'=> $nameM, 
'cphone'=> $phone, 
'cstatus'=> $status,
'clocation'=>$location, 
'cemail'=> $email, 
'ccountFam'=> $countFam, 
'cdisease'=> $disease, 

'chouse'=> $house, 
'cimg_house'=> $img_house, 
'cimg_Illness'=> $img_Illness, 
'cimg_pers'=> $img_pers, 
'cdetails'=> $details


)); 

echo '<div class="alert alert-success" role="alert">',"تم ارسال البيانات بنجاح",'</div>';
}



          ?>
  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-1">
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
              <div>
                <h4 style="text-align: right;">مستفيد فرد</h4>
              <div class="row">
                <div class="col">
                <input type="text" name="nameF" placeholder="الاسم الأول" />
               <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <input type="text" name="nameS" placeholder="الأسم الثاني" />
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <input type="text" name="nameT" placeholder="الاسم الثالث" />
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <input type="text" name="nameM"placeholder="اسم العائلة" />
                <span style="margin-left:120pt;color:red;">*</span>
                </div>
              </div>
              
              <div class="row">
                <div class="col">
                <input type="text" name="phone" placeholder="رقم الهاتف" />
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              <div class="col">
                <select class="form-control" name="status" id="exampleFormControlSelect1">
                  <option value="">الحالة الاجتماعية</option>
                  <option value="اعزب\اء">اعزب\اء</option>
                  <option value="متزوج\ة">متزوج\ة</option>
                  <option value="ارمل\ة">ارمل\ة</option>
                  <option value="مطلق\ة">مطلق\ة</option>
                 
                </select>
                <span style="margin-left:120pt;color:red;">*</span>
              </div>
              </div>
    <div class="row">
              <div class="col">
                <input type="email" name="email" placeholder="البرديد الالكتروني" />
                <span style="margin-left:320pt;color:red;">*</span>
              </div>
              <div class="col">
                <input type="text" name="location" placeholder="العنوان" />
                <span style="margin-left:320pt;color:red;">*</span>
              </div>
         
             <div class="col">
                <select class="form-control" name="countFam" id="exampleFormControlSelect1">
                  <option value="">عدد افراد الاسرة</option>
                  <option value="اقل من 5">اقل من 5</option>
                  <option value="5-7">5-7</option>
                  <option value="اكثر من 7">اكثر من 7</option>
                </select>
                <span style="margin-left:320pt;color:red;">*</span>
              </div>
    </div>
              <div class="row" style="text-align: right; ">
                <div class="col"  >
                  <input  type="checkbox"  id="myCheck" onclick="myFunction()" name="disease"  style="width: 20px; height: 20px;"  >
                  <label class="form-check-label" for="defaultCheck1">
                    هل يوجد حاله مزمنة
                    </label>
                     <span style="margin-left:320pt;color:red;">*</span>
                </div>
                
                <div class="col">
                </div>
              </div>
              <div>
            
             
                <input type="text" class="message-box" id="text" style="display:none" name="details" placeholder="شرح عن الحالة" />
             
              <input type="file"  name="imgi"  id="img" style="display:none" class="form-control" >
            
              </div>
              <div  style="text-align: right;">
              <label for="file">صورة الهويه</label>
              <input type="file"  name="imgp" id="file" class="form-control" >
              </div>
              <div  style="text-align: right;">
              <input  type="checkbox"  id="Check" onclick="myFun()" name="house"  style="width: 20px; height: 20px;"  >
                
              <label for="file"> عقد الايحار البيت</label>
              <input type="file"  name="imgh" id="home" style="display:none" class="form-control" >
              </div>
             
              
              <div class="d-flex ">
                <button type="submit">
                ارسال
                </button>
                <br><br>
              </div>
            </div>
            </form>
          </div></div>
       
        <div class="col-md-5 px-0">
          <div class="map_container">
            <div class="map-responsive">
              
              <img src="images/de.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
  <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  var img = document.getElementById("img");
  if (checkBox.checked == true){
    text.style.display = "block";
    img.style.display = "block";
  } else {
    text.style.display = "none";
     img.style.display = "none";
  }
}
function myFun() {
  var checkBox = document.getElementById("Check");
  var text = document.getElementById("home");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

  <!-- info section -->

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
<?php

  ?>