<?php
require_once('DBconnection.php');

$data = $_GET["data"];
$mymail = 'my@email.com';

$query = "SELECT mail_id FROM student_table WHERE mail_id = '$data'";

$result = $db->query($query);

//echo($result->num_rows);
if( $result->num_rows == 0 ){
    //$mes = "Invalid query: \n";
    //$mes .= 'Whole Query: ';
    //die($mes);
    echo "No mail id found";
}
else{
    $query1 = "SELECT mail_id FROM student_table WHERE mail_id = '$data'";
    $result1 = $db->query($query1);
    if( $result1->num_rows == 1 ){
        $to = $mymail;
        $email_subject = "Contact form submission: abc";
        $email_body = "You have received a new message. ".
            " Here are the details:\n Name: abc \n Email: $data \n Message \n habijabi";

        $headers = "From: $mymail\n";
        $headers .= "Reply-To: $data";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.html');
    }
    else {
        //echo "query successfull";
        echo "";
    }
}

?>