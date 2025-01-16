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
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Lego Speed Champions</title>
</head>
<body>
    <header>
        <div class="logo">
            <img class="logo-picture" src="images/Lego-logo.png" alt="Lego-logo">
        </div>

        <nav>
            <ul class="home"><a href="index.php">Home</a></ul>
            <ul><a href="cars.php">Cars</a></ul>
            <ul><a href="alternative-builds.php">Alternative Builds</a></ul>
            <ul><a href="contact.php">Contact</a></ul>
            <ul><a href="about.php">About</a></ul>
            <?php include 'nav.php'; ?>
        </nav>
    </header>

    <main>
        <div class="main-picture">
            <img width="100%" src="images/Speed-Champions.jpg" alt="Speed-Champions">
        </div>

        <h1>Lego Speed Champions</h1>

        <div class="main-box">
            <figure>
                <img class="cars-picture" src="images/Cars.jpg" alt="Cars">
                <figcaption>
                    Lego Speed Champions (stylized as LEGO Speed Champions) is an auto racing-inspired theme of Lego building sets first released in 2015. It features classic and modern styles from well-known car brands.
                </figcaption>
            </figure>

            <p class="main-text">
                Ready, set, go! LEGO® Speed Champions puts race car lovers in the driver's seat with realistic vehicle models from familiar racing competitors. LEGO® Speed Champions models take on popular brands like Ferrari, Lamborghini, McLaren, Porsche, and others as they zoom around the track alongside other classic designs.
            </p>
        </div>        
    </main>
    
    <footer>
        <div class="icons">
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
        </div>

        <p class="copyright">Copyright &copy; Lovro Pokrajčić</p>
    </footer>
</body>
</html>
