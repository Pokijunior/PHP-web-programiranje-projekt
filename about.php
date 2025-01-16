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
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>About Lego</title>
</head>
<body>
    <header>
        <div class="logo">
            <img class="logo-picture" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/LEGO_logo.svg/2048px-LEGO_logo.svg.png" alt="Lego-logo">
        </div>

        <nav>
            <ul><a href="index.php">Home</a></ul>
            <ul><a href="cars.php">Cars</a></ul>
            <ul><a href="alternative-builds.php">Alternative Builds</a></ul>
            <ul><a href="contact.php">Contact</a></ul>
            <ul class="about"><a href="about.php">About</a></ul>
        	<?php include 'nav.php'; ?>
        </nav>
    </header>

    <main>
        <h1>Lego</h1>
        <p>
            Lego is a line of plastic construction toys manufactured by the Lego Group, a privately held company based in Billund, Denmark. Lego consists of variously colored interlocking plastic bricks made of acrylonitrile butadiene styrene that accompany an array of gears, figurines called minifigures, and various other parts. Its pieces can be assembled and connected in many ways to construct objects, including vehicles, buildings, and working robots. Anything constructed can be taken apart again, and the pieces reused to make new things.
            The Lego Group began manufacturing the interlocking toy bricks in 1949. Moulding is done in Denmark, Hungary, Mexico, and China. Brick decorations and packaging are done at plants in the former three countries and in the Czech Republic. Annual production of the bricks averages approximately 36 billion, or about 1140 elements per second.
        </p>

        <h2>History</h1>
        <p>
            The Lego Group began in the workshop of Ole Kirk Christiansen (1891–1958), a carpenter from Billund, Denmark, who began making wooden toys in 1932. In 1934, his company came to be called "Lego", derived from the Danish phrase leg godt, which means "play well". In 1947, Lego expanded to begin producing plastic toys. In 1949 the business began producing, among other new products, an early version of the now familiar interlocking bricks, calling them "Automatic Binding Bricks". These bricks were based on the Kiddicraft Self-Locking Bricks, invented by Hilary Page in 1939 and patented in the United Kingdom in 1940 before being displayed at the 1947 Earl's Court Toy Fair. Lego had received a sample of the Kiddicraft bricks from the supplier of an injection-molding machine that it purchased. The bricks, originally manufactured from cellulose acetate, were a development of the traditional stackable wooden blocks of the time.
        </p>

        <h2>Design</h2>
        <div class="design">
            <figure>
                <img class="dimensions-img" src="images/Lego_dimensions.png">
                <figcaption>
                    Standar dimensions of some Lego bricks and plates
                </figcaption>
            </figure>
            <p class="design-text">
                Lego pieces of all varieties constitute a universal system. Despite variation in the design and the purposes of individual pieces over the years, each remains compatible in some way with existing pieces. Lego bricks from 1958 still interlock with those made presently, and Lego sets for young children are compatible with those made for teenagers. Six bricks of 2 × 4 studs can be combined in 915,103,765 ways. Each piece must be manufactured to an exacting degree of precision. When two pieces are engaged, they must fit firmly, yet be easily disassembled. The machines that manufacture Lego bricks have tolerances as small as 10 micrometres.
            </p>
        </div>

        <h2>Plastic</h2>
        <p>
            Lego factories recycle all but about 1 percent of their plastic waste from the manufacturing process. If the plastic cannot be re-used in Lego bricks, it is processed and sold on to industries that can make use of it. Lego, in 2018, set a self-imposed 2030 deadline to find a more eco-friendly alternative to the ABS plastic.
        </p>

        <iframe src="https://www.youtube.com/embed/qr_dTySMl7s?si=KucKh52ESrPGZi06" title="Lego story" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
        </iframe>
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