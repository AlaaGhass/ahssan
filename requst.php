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
            
            $cardname   = $_POST['name'];
            $cardnumber   = $_POST['phone'];
            $location   = $_POST['location'];
            $price   = $_POST['price'];

         
$stmt = $con->prepare("INSERT INTO 
requst(name,phone,location,idf,price)
VALUES(:zcardname,:zcardnumber,:zlocation,:zidf,:zprice)");     
$stmt->execute(array(


'zcardname'=> $cardname, 
'zcardnumber'=> $cardnumber, 
'zlocation'=> $location, 
'zprice'=> $price, 
'zidf'=> $idf



)); 
//header('Location:http://localhost/ahssan/'); 
echo '<div class="alert alert-success" role="alert">',"سيتم التواصل معك باقرب وقت ممكن",'</div>';

}



          ?>