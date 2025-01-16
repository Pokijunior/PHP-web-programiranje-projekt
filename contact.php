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
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Lego Speed Contact</title>
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
            <ul class="contact"><a href="contact.php">Contact</a></ul>
            <ul><a href="about.php">About</a></ul>
            <?php include 'nav.php'; ?>
        </nav>
    </header>

    <main>
        <iframe loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ85kepTzUZUcRmtUjepqBk7A&key=AIzaSyC9GqUOBUDjhSCDm_4brneJ-TeTfZUqsig">
        </iframe>

        <form>
            <label for="firstname">First Name *</label>
            <input type="text" id="firstname" name="firstname" placeholder="Your name is?" required>

            <label for="lastname">Last Name *</label>
            <input type="text" id="lastname" name="lastname" placeholder="Your last name is?" required>
            
            <label for="email">Your E-mail *</label>
            <input type="email" id="email" name="email" placeholder="Your e-mail is?" required>

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="">Please select</option>
                <option value="CRO" selected>Croatia</option>
                <option value="BIH">Bosnia and Herzegovina</option>
                <option value="SRB">Serbia</option>
                <option value="ITA">Italy</option>
                <option value="SLO">Slovenia</option>
                <option value="GER">Germany</option>
                <option value="HU">Hungary</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something here..." style="height:200px"></textarea>

            <input class="submit" type="submit" value="Submit">
        </form>
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