<?php
    ob_start();
    session_start();
    $pageTitle = 'signup';
    if (isset($_SESSION['UserName'])) {
        header('Location: home.php');
    }
    include 'connect.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $idf   = $_POST['idf'];
            
            $cardname   = $_POST['cardname'];
            $cardnumber   = $_POST['cardnumber'];
            $expmonth   = $_POST['expmonth'];
            $pass   = $_POST['pass'];
            $price   = $_POST['price'];
          

         
$stmt = $con->prepare("INSERT INTO 
pay(cardname,cardnumber,expmonth,pass,idf,price)
VALUES(:zcardname,:zcardnumber,:zexpmonth,:zpass,:zidf,:zprice)");     
$stmt->execute(array(


'zcardname'=> $cardname, 
'zcardnumber'=> $cardnumber, 
'zexpmonth'=> $expmonth, 
'zidf'=> $idf, 
'zprice'=> $price, 
'zpass'=>$pass


)); 
//header('Location:http://localhost/ahssan/'); 
echo '<div class="alert alert-success" role="alert">',"تمت عملية التبرع بنجاح",'</div>';

}



          ?>