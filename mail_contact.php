
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["contact_name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["contact_email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["contact_message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Hubo un problema en el envio del mensaje.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "turnoscabin@mail.com";

        // Set the email subject.
        $subject = "Contacto desde la web";

        // Build the email content.
        $email_content = "De parte de: " .  $name . " <". $email .">\n\n\n";
        $email_content .= "Mensaje:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            echo "Recibimos su mensaje. Muchas gracias.";
        } else {
            echo "Hubo un problema en el envio del mensaje.";
        }
    } else {
        echo "Hubo un problema en el envio del mensaje.";
    }
?>
