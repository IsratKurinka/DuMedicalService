<?php
require_once('DBconnection.php');

//ini_set('display_errors', 1);
//ini_set('log_errors', 1);

$datamail = $_GET["mailID"];
$datapass = $_GET["psw"];

$val2 = "";

$login_query = "SELECT * FROM student_table where mail_id = '$datamail' AND password='$datapass'";
$login_res = $db->query($login_query);

if( $login_res->num_rows == 1 ){
    $val2 ="success";
}
else {
    $val2 = "Mail or password is not matched";
}
echo "$val2";

$db->close();
?>