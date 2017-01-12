<?php
    require_once('libs/PHPMailer/class.phpmailer.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = trim($_POST["full_name"]);
        $dni = trim($_POST["dni"]);
        $secure = trim($_POST["secure"]);
        $age = trim($_POST["age"]);
        $telephone = trim($_POST["telephone"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $description = trim($_POST["description"]);
        $have_file=false;
        $target_file = "./uploads/" . basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $have_file=true;
        }

        // Check that data was sent to the mailer.
        if ( empty($full_name) OR empty($dni)
             OR empty($secure) OR empty($age)
             OR empty($telephone) OR empty($description)
            OR !filter_var($email, FILTER_VALIDATE_EMAIL)
        ){
            echo "Hubo un problema en el envio de la solicitud.";
            exit;
        }
        // Set the recipient email address.
        //$recipient = "turnoscabin@comodoro.coop";
        $recipient = "alangabrielmoreno@gmail.com";
        // Set the email subject.
        $subject = "Solicitud de turno desde la web";

        // Build the email content.
        $email_content = "Nombre: " .  $full_name . "\n\n";
        $email_content .= "DNI: " .  $dni . "\n\n";
        $email_content .= "Obra Social: " .  $secure . "\n\n";
        $email_content .= "Edad: " .  $age . "\n\n";
        $email_content .= "Tel.: " .  $telephone . "\n\n";
        $email_content .= "E-mail: " .  $email . "\n\n";
        $email_content .= "Descripción: " .  $description . "\n\n";

        $e = new PHPMailer();
        $e->From = $email;
        $e->FromName = $full_name;
        $e->Subject = $subject;
        $e->Body= $email_content;
        $e->AddAddress($recipient);
        if($have_file)
          $e->AddAttachment($target_file);
        $result= $e->Send();
        // Send the email.
        if ($result) {
            echo "Recibimos su solicitud. Muchas gracias.";
        } else {
            echo "Hubo un problema en el envio de la solicitud.";
        }
        if($have_file)
          unlink($target_file);
    } else {
        echo "Hubo un problema en el envio de la solicitud.";
    }

?>
