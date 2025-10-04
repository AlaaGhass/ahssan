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
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #0e1e6c;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #e7d619;
  color:#0e1e6c;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<body>
<?php
          include 'connect.php';?>
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
                  خدمة المستفيدين</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
   
  
  <!-- about section -->

 
  <!-- end about section -->

  <!-- ani section -->

  <?php
          include 'connect.php';
          $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
     
          $Id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0; 
          if ($do == 'main') {
      $stmt = $con->prepare("SELECT * FROM fundraising Where id=$Id  ");

                        
$stmt->execute();
$rows = $stmt->fetch();?>
  <section class="contact_section layout_padding-top">
 

          <div class="container" id="btn" >
      <form action="requst.php"  method="post" style="text-align:right">
      <br><br>
        <div class="row">
         
       

          <div class="col-50">
            <h3>طلب تبرع </h3>
            <label for="fname"></label>
       
            <label for="cname">الاسم الرباعي*</label>
            <input type="text" id="cname" name="name" placeholder="الاسم الرباعي">
            <input type="hidden" id="ccnum" name="idf" value="<?php echo $rows['id']?>">
            <label for="ccnum">رقم التواصل *</label>
            <input type="text" id="ccnum" name="phone" placeholder="056-000-0000">
            <label for="expmonth">العنوان*</label>
            <input type="text" id="expmonth" name="location" placeholder="العنوان">
            <label for="expmonth">المبلغ المنوي التبرع به*</label>
            <input type="text" id="expmonth" name="price" placeholder="الميلغ المنوي التبرع به">
            
          </div>
          
        </div>
   
        <input type="submit" value="تبرع" class="btn">
      </form>
    </div>
  </div>

</div>
</div></div>
          
          </div>
        </div>
      
    </div>
  </section>

<?php }?>

  <!-- end info_section -->
  <script>
   
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("pay");
  text.style.display = "block";
}
function view() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("btn");
  text.style.display = "block";
}
</script>

  <!-- footer section -->
 
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