<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/cars.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>Lego Speed Cars</title>
</head>
<body>
    <header>
        <div class="logo">
            <img class="logo-picture" src="images/Lego-logo.png" alt="Lego-logo">
        </div>

        <nav>
            <ul><a href="index.php">Home</a></ul>
            <ul class="cars"><a href="cars.php">Cars</a></ul>
            <ul><a href="alternative-builds.php">Alternative Builds</a></ul>
            <ul><a href="contact.php">Contact</a></ul>
            <ul><a href="about.php">About</a></ul>
            <?php include 'nav.php'; ?>
        </nav>
    </header>

    <main>
        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Nissan-r34.png" alt="Nissan R34">
            </div>

            <div class="car-info">
                <p class="car-name">2 Fast 2 Furious Nissan Skyline GT-R (R34)</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Dodge-charger.png" alt="Dodge Charger R/T">
            </div>

            <div class="car-info">
                <p class="car-name">Fast & Furious 1970 Dodge Charger R/T</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Ferarri-812.png" alt="Ferarri 812">
            </div>

            <div class="car-info">
                <p class="car-name">Ferrari 812 Competizione</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Aston-Martin-DB5.png" alt="Aston Martin DB5">
            </div>

            <div class="car-info">
                <p class="car-name">007 Aston Martin DB5</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img-lambo" src="images/Lamborghini-countach.png" alt="Lamborghini Countach">
            </div>

            <div class="car-info">
                <p class="car-name">Lamborghini Countach</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Lotus-evija.png" alt="Lotus Evija">
            </div>

            <div class="car-info">
                <p class="car-name">Lotus Evija</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Toyota-supra.png" alt="Toyota Supra GR">
            </div>

            <div class="car-info">
                <p class="car-name">Toyota Supra GR</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Ferarri-512m.png" alt="Ferarri 512M">
            </div>

            <div class="car-info">
                <p class="car-name">Ferrari 512M</p>
            </div>
        </div>
        
        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Koenigsegg-jesko.png" alt="Koenigsegg Jesko">
            </div>

            <div class="car-info">
                <p class="car-name">Koenigsegg Jesko</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Pagani-utopia.png" alt="Pagani Utopia">
            </div>

            <div class="car-info">
                <p class="car-name">Pagani Utopia</p>
            </div>
        </div>

        <div class="car">
            <div class="car-img">
                <img class="img" src="images/Porsche-963.png" alt="Porsche 963">
            </div>

            <div class="car-info">
                <p class="car-name">Porsche 963</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="icons">
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
        </div>

        <p class="copyright">
            Copyright &copy; Lovro Pokrajčić
        </p>
    </footer>
    

    

</body>
</html>