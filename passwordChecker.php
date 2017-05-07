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
<<<<<<< HEAD
    $usr = $login_res->fetch_assoc();
    $stuID = $usr['stu_id'];
    $val2 ="success";

    session_start();
    $_SESSION['uid']=$stuID;
=======
    $val2 ="success";
>>>>>>> 5b6b2426097b5c149197d72d84e8805e4859193a
}
else {
    $val2 = "Mail or password is not matched";
}
echo "$val2";

$db->close();
?>