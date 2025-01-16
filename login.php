<?php
session_start();

include('config.php');

if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];

        header('Location: index.php');
        exit();
    } else {
        $error_message = "Pogrešno korisničko ime ili lozinka!";
    }
}
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
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Sign In</title>
</head>
<body>
    <header>
        <div class="logo">
            <img class="logo-picture" src="images/Lego-logo.png" alt="Lego-logo">
        </div>
        <nav>
            <ul><a href="index.php">Home</a></ul>
            <ul><a href="cars.php">Cars</a></ul>
            <ul><a href="alternative-builds.php">Alternative Builds</a></ul>
            <ul><a href="contact.php">Contact</a></ul>
            <ul><a href="about.php">About</a></ul>
            <ul class="login"><a href="login.php">Sign In</a></ul>
            <ul><a href="register.php">Register</a></ul>
        </nav>
    </header>

    <main>
        <form method="POST" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required autofocus>

            <label for="password">Password:</label>
            <div class="password-container">
                <input type="password" id="password" name="password">
                <button class="showPassword" type="button" id="togglePassword">Show</button><br>
            <script>
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            togglePassword.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePassword.textContent = type === 'password' ? 'Show' : 'Hide';
            });
            </script>
            </div>

            <button type="submit">Sign In</button>
            <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
        </form>
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
