<?php
/**
 * Created by PhpStorm.
 * User: emma
 * Date: 4/24/17
 * Time: 2:52 PM
 */
//session_start();
$servername = "localhost";
<<<<<<< HEAD
$username = "duhospital";
$password = "duhospital";
$dbname = "duhospital";
=======
$username = "root";
$password = "1234";
$dbname = "duHospital";
>>>>>>> 5b6b2426097b5c149197d72d84e8805e4859193a

//create connection
$db = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($db -> connect_error){
    die("connection failed ".$db->connect_error);
}
else{
    //echo "connection successful";
}
?>