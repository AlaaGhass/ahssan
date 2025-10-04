<?php
include 'connect.php';
$Id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0; 

  $stmtActive = $con->prepare("UPDATE page_user	 SET view=1 WHERE id=$Id");

        $stmtActive->execute();
        header('Location: pageUser.php');?>