<?php 

define('DB_HOST',"localhost");
define('DB_USER',"user_name");
define('DB_PASS',"user_password");
define('DB_NAME',"insaid_payment");//database name



$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if($connection) {
//     echo "we are connected";

// }

?>