<?php
include 'connect.php';

$stmt = $con->prepare("SELECT @@GLOBAL.sql_mode global, @@SESSION.sql_mode session
SET sql_mode = '';
SET GLOBAL sql_mode = '';
")


?>