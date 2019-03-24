<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#2196f3">
    <meta charset="utf-8">
    <title>Appartement Marija - Form einreichung</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/javascript.js"></script>
</head>

<body>
    <?php
    error_reporting(0);
    if(isset($_POST['submit']))
    {
        $to = "neksuses@gmail.com";
        $from = $_POST['mail'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dateArrival = $_POST['dateArrival'];
        $dateDeparture = $_POST['dateDeparture'];
        $numberPeople = $_POST['numberPeople'];
        $numberChildren = $_POST['numberChildren'];
        $question = $_POST['question'];
        $subject = "Form submission - DE";
        $message = "E-mail adresa: " . $from . "\n\n" . "Ime: " . $firstName . " " . $lastName . "\n\n" . "Datum dolaska: " .  $dateArrival . "\n" . "Datum odlaska: " . $dateDeparture . "\n\n" . "Broj osoba: " . $numberPeople . "\n" . "Broj djece: " . $numberChildren . "\n\n" . "Poruka: " . $question . "\n\n";
        $headers = "From:" . $from;

        mail($to, $subject, $message, $headers);
    }
    ?>
    <nav class="white">
    </nav>
    <div class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <h1 class="header center indigo-text">Appartement Marija</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Mail gesendet. Danke,
                        <?= $firstName ?>! Wir werden Sie in Kürze kontaktieren.</h5>
                </div>
                <div class="row center">
                    <a href="index_de.html" class="btn-large waves-effect waves-light indigo">Zurück</a>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="images/background3-draw.jpg" alt="Rab 3"></div>
    </div>
</body>

</html>