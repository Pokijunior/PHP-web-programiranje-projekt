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
    <link rel="stylesheet" href="styles/alternative-builds.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>Lego Speed Alternative builds</title>
</head>
<body>
    <header>
        <div class="logo">
            <img class="logo-picture" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/LEGO_logo.svg/2048px-LEGO_logo.svg.png" alt="Lego-logo">
        </div>

        <nav>
            <ul><a href="index.php">Home</a></ul>
            <ul><a href="cars.php">Cars</a></ul>
            <ul class="alternative-builds"><a href="alternative-builds.php">Alternative Builds</a></ul>
            <ul><a href="contact.php">Contact</a></ul>
            <ul><a href="about.php">About</a></ul>
            <?php include 'nav.php'; ?>
        </nav>
    </header>

    <main>
        <div class="note">
            <div class="info">
                <p class="info-text"><strong>Info!</strong> Click on the Lego set and it will show you his alternative builds</p>
            </div>
        </div>

        <div class="image-container">
            <div class="image-group">
                <img class="main-image" src="images/Nissan-r34.png" alt="Nissan R34">
                <figure class="hidden-image">
                    <img  src="images/Silvia-s15.png" alt="Nissan Silvia S15">
                    <figcaption>Nissan Siliva S15</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Shelby-gt500.png" alt="Ford Mustang Shelby GT500">
                    <figcaption>Ford Mustang Shelby GT500</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Zonda-r.png" alt="Pagani Zonda R">
                    <figcaption>Pagani Zonda R</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Delorean.png" alt="DMC Delorean">
                    <figcaption>DMC Delorean</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/BMW-E30.png" alt="BMW E30">
                    <figcaption>BMW E30</figcaption>
                </figure>
            </div>

            <div class="image-group">
                <img class="main-image" src="images/Dodge-charger.png" alt="Dodge Charger R/T">
                <figure class="hidden-image">
                    <img src="images/r34.png" alt="Nissan R34">
                    <figcaption>Nissan R34</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Porsche-911.png" alt="Porsche 911">
                    <figcaption>Porsche 911</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Ferarri-F40.png" alt="Ferrari F40">
                    <figcaption>Ferrari F40</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Plymout-barracuda.png" alt="Plymouth Barracuda">
                    <figcaption>Plymouth Barracuda</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Hoonitruck.png" alt="Ken Block's Hoonitruck">
                    <figcaption>Ken Block's Hoonitruck</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Golf-mk1.png" alt="Volkswagen Golf mk1">
                    <figcaption>Volkswagen Golf mk1</figcaption>
                </figure>
            </div>

            <div class="image-group">
                <img class="main-image" src="images/Ferarri-812.png" alt="Ferrari 812">
                <figure class="hidden-image">
                    <img src="images/Daytona-sp3.png" alt="Ferrari Daytona SP3">
                    <figcaption>Ferrari Daytona SP3</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Enzo.png" alt="Ferrari Enzo">
                    <figcaption>Ferrari Enzo</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Vantage.png" alt="Aston Martin Vantage">
                    <figcaption>Aston Martin Vantage</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Testarossa.png" alt="Ferrari Testarossa">
                    <figcaption>Ferrari Testarossa</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/f-Delorean.png" alt="Delorean">
                    <figcaption>Delorean</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/rx7.png" alt="Mazda rx7">
                    <figcaption>Mazda rx7</figcaption>
                </figure>
            </div>

            <div class="image-group">
                <img class="main-image" id='img-lambo' src="images/Lamborghini-countach.png" alt="Lamborghini Countach">
                <figure class="hidden-image">
                    <img src="images/Ryosuke's-rx7.png" alt="Ryosuke's Mazda rx7">
                    <figcaption>Ryosuke's Mazda rx7</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Lancia-037.png" alt="Lancia Rally 037">
                    <figcaption>Lancia Rally 037</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Jesko.png" alt="Koenigsegg Jesko">
                    <figcaption>Koenigsegg Jesko</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Chrion.png" alt="Lamborghini Chiron">
                    <figcaption>Lamborghini Chiron</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Porsche-917k.png" alt="Porsche 917K">
                    <figcaption>Porsche 917K</figcaption>
                </figure>
            </div>
            
            <div class="image-group">
                <img class="main-image" src="images/Toyota-supra.png" alt="Toyota Supra GR">
                <figure class="hidden-image">
                    <img src="images/Supra-mk4.png" alt="Toyota Supra mk4">
                    <figcaption>Toyota Supra mk4</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Corvette-c3.png" alt="Chevrolet Corvette C3">
                    <figcaption>Chevrolet Corvette C3</figcaption>
                </figure>
                
                <figure class="hidden-image">
                    <img src="images/Nissan-300zx.png" alt="Nissan 300zx">
                    <figcaption>Nissan 300ZX</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/s-Siliva-s15.png" alt="Nissan Silvia S15">
                    <figcaption>Nissan Silvia S15</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Mazda-mx5.png" alt="Mazda Mx5">
                    <figcaption>Mazda Mx5</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Datsun-240z.png" alt="Nissan Fairlady Datsun 240z">
                    <figcaption>Nissan Fairlady Datsun 240z</figcaption>
                </figure>

                <figure class="hidden-image">
                    <img src="images/Audi-R8.png" alt="Audi R8">
                    <figcaption>Audi R8</figcaption>
                </figure>
            </div>
        </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    var imageGroups = document.querySelectorAll('.image-group');

    imageGroups.forEach(function (group) {
        var mainImage = group.querySelector('.main-image');
        var hiddenImages = group.querySelectorAll('.hidden-image');

        mainImage.addEventListener('click', function () {
            hiddenImages.forEach(function (image) {
                if (image.style.display === 'block') {
                    image.style.display = 'none';
                } else {
                    image.style.display = 'block';
                }
            });
        });
    });
});

    </script>

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