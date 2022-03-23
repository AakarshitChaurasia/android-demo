<?php

//class Connect{

//function con(){
DEFINE("DB_HOST", "andro.mysql.database.azure.com");
DEFINE("DB_USER", "andro");
DEFINE("DB_PASS","@Aicte123");
DEFINE("DB_NAME","android");

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$con){
    //echo 'could not establish connection';
    die("Connection failed: " . mysqli_connect_error());
}
//}

//}

// $cone = new Connect();
 //$cone->con();
 
?>
