<?php
if(isset($_POST['Email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "info@bprconsultants.com.au";
$email_subject = "Web contact";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['Name']) ||
!isset($_POST['Description']) ||
!isset($_POST['Email'])) {

echo "<b>Error. It couldn't send the form. </b><br />";
echo "Please, try it again, and check the information <br />";
die();
}

$email_message = "Details of the contact:\n\n";
$email_message .= "Name: " . $_POST['Name'] . "\n";
$email_message .= "Description: " . $_POST['Description'] . "\n";
$email_message .= "E-mail: " . $_POST['Email'] . "\n";



// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "Thank you to contact us!";
}
?>
