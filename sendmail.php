<?php
<<<<<<< HEAD
//require_once('DBconnection.php');
include 'healthcard.php';
if($val = "Success")
{
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    echo $mail." ".$name;

    require_once 'swiftmailer/lib/swift_required.php';

    $subject = 'Du Medical Service Signup | Verification'; // Give the email a subject
   // $address = "http://csedu.cf/psychohelp/profile/access/verify.php?email=".$mail;

    $address = "http://csedu.cf/duHospital/verify.php?mail=".$mail;
    $body = '

    Thanks for signing up!
    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

    ------------------------
       var Username: ' . $name . '
    ------------------------

        Please click this link to activate your account:.
    ' . $address;

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
        ->setUsername('du.medical.pro@gmail.com')
        ->setPassword('du.medical.pro1')
        ->setEncryption('ssl');

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance($subject)
        ->setFrom(array('noreply@du.medical.pro.com' => 'du.medical.pro'))
        ->setTo(array($mail))
        ->setBody($body);

    $ver = $mailer->send($message);
    if ($ver)
        echo "SUCCESS";
    else
        echo "ERROR";

}
=======
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

>>>>>>> 5b6b2426097b5c149197d72d84e8805e4859193a
?>