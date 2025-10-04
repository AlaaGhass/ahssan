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
   printWin.document.write('<html><h1 style="text-align:center"> استبانة مستفيد</h1><br>');
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



  <!-- end about section -->

  <!-- ani section -->
  <?php
  include 'connect.php';
  $Id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0; 
  $get = $con->prepare("SELECT * FROM page_user WHERE id=$Id");
$get->execute();

$r =$get->fetch(); 


?>
    <section class="about_section layout_padding">
    <input  type="button" value="طباعة" onclick="printPage('block1');"></input>
    <div class="container" id="block1" style="text-align:right">
  
  <table  class="table detail-box" style="text-align:right">
					
							
			
        
              
           
                            
              <?php      
     
  
      
     echo "<tr>";
     echo "<td>";			
     
                  echo "","الاسم",": " . $r['name_first'] ," ".$r['name_second']," ".$r['name_thirt']," ".$r['name_family']," ". "" ,"</td>";
                  echo "<td>"; echo "","الحالة الاجتماعية",": "  . $r['status'] . "</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td>","رقم الهاتف",": "  . $r['phone'] . "</td>";
                  echo "<td>","البريد الالكتروني",": "  . $r['email'] . "</td>";
                  echo "</tr>";

             echo "<tr>";
             echo "<td>","عدد الافراد",": "  . $r['countFam'] . "</td>";
               echo "<td>","الحالات المزمنة",": "  . $r['disease'] . "</td>";
               echo "</tr>";
             echo "<tr>";
              echo "<td>","العنوان",": "  . $r['location'] . "</td>";
            
             echo "</tr>";
             echo "<tr>";
           
             echo "<td>","التفاصيل",": "  . $r['details'] . "</td>";
            echo "</tr>";
                //  echo "<td>" . $r['location'] . "</td>"; ?>
              <tr>  <td> عقد الايجار : <?php if(empty($r['img_house'])){ echo"ليس هناك مرفق";}else{?> <img src="../file/<?php echo $r['img_house']; ?>"> <?php }?></td> </tr> 
              <tr>   <td>صورة الهوية : <?php if(empty($r['img_pers'])){ echo"ليس هناك مرفق";}else{?> <img src="../file/<?php echo $r['img_pers']; ?>"> <?php }?></td> </tr> 
              <tr>  <td>شهادة المرضية:  <?php if(empty($r['img_Illness'])){ echo"ليس هناك مرفق";}else{?> <img src="../file/<?php echo $r['img_Illness']; ?>"> <?php }?></td> </tr> 
             
             
    
             
                  
      <?php ?> </table>
  <?php

  ?>
</div>

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