<?php
//session_start();
require_once('DBconnection.php');

//success message
//echo "connected successfully"."<br>";

$val = "";

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $hallName = $_GET["hall"];
    $id_no = $_GET["id_no"];
    $regNo = $_GET["regNo"];
    $session1 = $_GET["session1"];
    $session2= $_GET["session2"];
    $pass2 = $_GET["pass2"];
    $password = $pass2;

    $ins_query = "INSERT INTO student_table (username,mail_id,regNo,session1,session2,idCardNo,password,hallName)
		VALUES ('$name', '$mail','$regNo','$session1','$session2','$id_no','$password','$hallName')";
    $res2 = $db->query($ins_query);
    if ($res2 == true) {
        $val = "Success";

    }
    else {
        $val = "Failed!";
        //echo mysqli_error($db);
    }

echo "$val";
$db->close();

?>