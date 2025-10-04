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

<script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write('<html><h1 style="text-align:center"> قائمة طلبات المستفيدين </h1><br>');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
<?php
include 'connect.php';
  $stmtActive = $con->prepare("UPDATE page_user	 SET nots=1 ");

        $stmtActive->execute();?>
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
  <?php
  include 'connect.php';
  $get = $con->prepare("SELECT * FROM page_user WHERE view=0");
$get->execute();

$views =$get->fetchAll(); 


?>
    <section class="about_section layout_padding">
    <div class="container" id="block1">
  <table  class="main-table manage-members text-center table table-bordered">
						<tr>
							
							<td>الاسم</td>
              <td>حالة الاجتماعية</td>
            
              <td>رقم الهاتف</td>
              <td>البريد الالكتروني</td>
              <td>عدد الافراد</td>
              <td>حالات مزمنه </td>
              <td>تفاصيل</td>
              <td> العنوان</td>
              <td> عقد الايجار</td>
              <td> صورة الهويه</td>
              <td> شهادة طبية</td>
              <td> ارشفة</td>
              <td> </td>
           
        
              
           
                            
              <?php      foreach($views as $r) {
     
  
      
       echo "<tr>";
									
     
                  echo "<td>" . $r['name_first'] ," ".$r['name_second']," ".$r['name_thirt']," ".$r['name_family']," ". "</td>";
                  echo "<td>" . $r['status'] . "</td>";
                  echo "<td>" . $r['phone'] . "</td>";
                  echo "<td>" . $r['email'] . "</td>";
             //     echo "<td>" . $r['serial'] . "</td>";

                  echo "<td>" . $r['countFam'] . "</td>";
                  echo "<td>" . $r['disease'] . "</td>";
                  echo "<td>" . $r['details'] . "</td>";
                  echo "<td>" . $r['location'] . "</td>";
                //  echo "<td>" . $r['location'] . "</td>"; ?>
                <td><?php if(empty($r['img_house'])){ echo"ليس هناك مرفق";}else{?> <a href="../file/<?php echo $r['img_house']; ?>">عقد الايجار</a> <?php }?></td>
                <td><?php if(empty($r['img_pers'])){ echo"ليس هناك مرفق";}else{?> <a href="../file/<?php echo $r['img_pers']; ?>">صورة الهوية</a> <?php }?></td>
                <td> <?php if(empty($r['img_Illness'])){ echo"ليس هناك مرفق";}else{?> <a href="../file/<?php echo $r['img_Illness']; ?>">شهادة طبية</a> <?php }?></td>
                <td> <a href="delete.php?id=<?php echo $r['id'] ?>">ارشفة</a></td>
                <td> <a href="print.php?id=<?php echo $r['id'] ?>">طباعة</a></td>
             
    
             
                  
      <?php }?> </table>
  <?php

  ?>
<h2 class="btn btn"><a style="background-color:#edd600; text-align:right" href="allUser.php">الارشيف</a></h2>

  <!-- end ani section -->
</div>

</div>

  <!-- end pet section -->

  <!-- us section -->

     

  



  <!-- end client section -->

  




  <!-- end info_section -->



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