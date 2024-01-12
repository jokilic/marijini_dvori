<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139929872-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-139929872-2');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#3f51b5">
    <meta charset="utf-8">
    <meta name="description"
        content="Neu eingerichtete Appartements auf der Sonneninsel Rab. Sehen Sie sich die Fotos an, buchen Sie Ihren Aufenthalt und genießen Sie Ihren sonnigen Urlaub.">
    <title>Marijini dvori | Form einreichung</title>
    <link rel="canonical" href="https://www.marijini-dvori.ga" />
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/script.js"></script>
</head>

<body>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    error_reporting(0);

    if (isset($_POST['submit'])) {
        $mail = new PHPMailer(true);

        // Configure SMTP settings for Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'martinkilic0812@gmail.com';
        $mail->Password = 'vovb wimv rbng vjfz';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        // Sender and recipient
        $from = $_POST['mail'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $to = "martinkilic0812@gmail.com";

        // Email content
        $subject = "Form submission - DE";
        $message = "E-mail adresa: " . $from . "\n\n" . "Ime: " . $firstName . " " . $lastName . "\n\n" . "Datum dolaska: " . $_POST['dateArrival'] . "\n" . "Datum odlaska: " . $_POST['dateDeparture'] . "\n\n" . "Broj osoba: " . $_POST['numberPeople'] . "\n" . "Broj djece: " . $_POST['numberChildren'] . "\n\n" . "Željeni apartman: " . $_POST['apartmentRadio'] . "\n\n" . "Poruka: " . $_POST['question'] . "\n\n";
        
        try {
            // Set the sender and recipient
            $mail->setFrom($from, $firstName . ' ' . $lastName);
            $mail->addAddress($to);

            // Set the email subject and body
            $mail->Subject = $subject;
            $mail->Body = $message;

            // Send the email
            $mail->send();

            // Display success message
            ?>

    <div class="parallax-container full">
        <div class="section no-pad-bot">
            <div class="container">
                <h1 class="header center green-text">Marijini dvori</h1>
                <div class="row center">
                    <h2 class="header col s12 light">Mail gesendet. Danke,
                        <?=$firstName?>! Wir werden Sie in Kürze kontaktieren.
                    </h2>
                </div>
                <div class="row center">
                    <a href="de.html" title="back" class="btn-large waves-effect waves-light green">Zurück</a>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="images/background3-draw.jpg" alt="Rab 3" title="Rab 3"></div>
    </div>
    <?php
        } catch (Exception $e) {
            // Display error message
            ?>
            <div class="parallax-container full">
        <div class="section no-pad-bot">
            <div class="container">
                <h1 class="header center green-text">Marijini dvori</h1>
                <div class="row center">
                    <h2 class="header col s12 light">E-Mail konnte nicht gesendet werden. Kontaktieren Sie uns <a href="mailto:martinkilic0812@gmail.com">direkt per E-Mail</a>.
                    </h2>
                    <h4 class="header col s12 light">Catch error: $e</h4>
                    <h4 class="header col s12 light">Mail error: {$mail->ErrorInfo}</h4>
                </div>
                <div class="row center">
                    <a href="de.html" title="back" class="btn-large waves-effect waves-light red">Zurück</a>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="images/background3-draw.jpg" alt="Rab 3" title="Rab 3"></div>
    </div>
    <?php
        }
    }
    ?>
</body>

</html>