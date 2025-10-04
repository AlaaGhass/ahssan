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


        $text = $_POST['text'];
		$stmt = $con->prepare("INSERT INTO 
post(text)
VALUES(:ctext)");     
$stmt->execute(array(

'ctext' => $text


)); 
echo '<div class="alert alert-success" role="alert">',"تم ارسال البيانات بنجاح",'</div>';	}

?>	