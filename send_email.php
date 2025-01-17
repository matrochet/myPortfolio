    <?php

    header('Content-Type: application/json');

    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;


    $response = [
        "success" => false,
        "message" => "Une erreur est survenue.",
    ];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 't7N2y@example.com';
            $mail->Password = 'password';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom($email, 'Formulaire de contact du site web');
            $mail->addAddress('test@example.com');
            $mail->Subject = $subject;
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            $mail->Body = "
                <html>
                <body>
                    <h3>Nouveau message du formulaire de contact</h3>
                    <p><strong>De :</strong> {$email}</p>
                    <p><strong>Message :</strong></p>
                    <p>" . nl2br(htmlspecialchars($message)) . "</p>
                </body>
                </html>";
            $mail->AltBody = "Message reçu de : \n$email\n\n$message";


            if ($mail->send()) {
                $response["success"] = true;
                $response["message"] = "Votre mail a été envoyé avec succès.";
            }
        } catch (Exception $e) {
            $response["message"] = "Erreur d'envoi : {$mail->ErrorInfo}";
        }
    }

    echo json_encode($response);
