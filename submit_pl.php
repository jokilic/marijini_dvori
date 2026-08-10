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
        content="Nowo urządzone apartamenty na słonecznej wyspie Rab. Obejrzyj zdjęcia, zarezerwuj pobyt i ciesz się słonecznymi wakacjami.">
    <title>Marijini dvori | Przesyłanie formularza</title>
    <link rel="canonical" href="https://www.marijini-dvori.com" />
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

    require __DIR__ . '/PHPMailer/src/Exception.php';
    require __DIR__ . '/PHPMailer/src/PHPMailer.php';
    require __DIR__ . '/PHPMailer/src/SMTP.php';

    error_reporting(0);

    if (isset($_POST['submit'])) {
        $mail = new PHPMailer(true);

        // InfinityFree does not expose custom environment variables to PHP.
        $smtpConfigPath = __DIR__ . '/smtp_config.php';
        $smtpConfig = is_file($smtpConfigPath) ? require $smtpConfigPath : [];
        $smtpUsername = trim((string) ($smtpConfig['username'] ?? ''));
        $smtpPassword = preg_replace('/\s+/', '', (string) ($smtpConfig['app_password'] ?? ''));

        // Configure SMTP settings for Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->CharSet = PHPMailer::CHARSET_UTF8;

        // Sender and recipient
        $from = $_POST['mail'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $to = $smtpUsername;

        // Email content
        $subject = "Form submission - PL";
        $message = "E-mail adresa: " . $from . "\n\n" . "Ime: " . $firstName . " " . $lastName . "\n\n" . "Datum dolaska: " . $_POST['dateArrival'] . "\n" . "Datum odlaska: " . $_POST['dateDeparture'] . "\n\n" . "Broj osoba: " . $_POST['numberPeople'] . "\n" . "Broj djece: " . $_POST['numberChildren'] . "\n\n" . "Željeni apartman: " . $_POST['apartmentRadio'] . "\n\n" . "Poruka: " . $_POST['question'] . "\n\n";
        
        try {
            if ($smtpUsername === '' || $smtpPassword === '') {
                throw new Exception('SMTP credentials are not configured.');
            }

            // Set the sender and recipient
            // Gmail must send from the authenticated account; replies go to the guest.
            $mail->setFrom($to, 'Marijini dvori');
            $mail->addReplyTo($from, $firstName . ' ' . $lastName);
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
                    <h2 class="header col s12 light">Mail wysłany. Dziękuję,
                        <?=$firstName?>! Skontaktujemy się z Tobą wkrótce.
                    </h2>
                </div>
                <div class="row center">
                    <a href="pl.html" title="back" class="btn-large waves-effect waves-light green">Wróć</a>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="images/background3-draw.jpg" alt="Rab 3" title="Rab 3"></div>
    </div>
    <?php
        } catch (Exception $e) {
              // Keep SMTP details out of the public response while retaining diagnostics.
              error_log('PHPMailer error: ' . $mail->ErrorInfo);
              // Display error message
              ?>
              <div class="parallax-container full">
              <div class="section no-pad-bot">
                  <div class="container">
                      <h1 class="header center green-text">Marijini dvori</h1>
                      <div class="row center">
                          <h2 class="header col s12 light">Nie udało się wysłać poczty. Skontaktuj się z nami <a href="mailto:martinkilic0812@gmail.com">bezpośrednio poprzez e-mail</a>.
                          </h2>
                      </div>
                      <div class="row center">
                          <a href="de.html" title="back" class="btn-large waves-effect waves-light red">Wróć</a>
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
