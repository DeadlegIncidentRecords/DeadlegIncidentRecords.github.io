$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$field_subject = $_POST['cf_subject'];

$mail_to = 'deadlegincidentrecords@gmail.com';
$subject = $field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;


$headers = "From: $cf_email\r\n";
$headers .= "Reply-To: $cf_email\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Thank you for the message! We back to you shortly.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        // window.location = 'contact_page.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert("Message failed! We're sorry! Please, send an email to deadlegincidentrecords@gmail.com");
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        // window.location = 'contact_page.html';
    </script>
<?php
}?>
