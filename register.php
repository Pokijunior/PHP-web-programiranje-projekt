<?php
require_once 'config.php';
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($first_name)) {
        $errors[] = 'First name is required.';
    }
    if (empty($last_name)) {
        $errors[] = 'Last name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }
    if (strlen($username) < 3) {
        $errors[] = 'Username must be at least 3 characters long.';
    }
    if (empty($password)) {
        $errors[] = 'Password is required.';
    }

    if (empty($errors)) {
        $stmt = $conn->prepare('SELECT id FROM users WHERE email = ? OR username = ?');
        $stmt->bind_param('ss', $email, $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $errors[] = 'Email or username already exists.';
        }
        $stmt->close();
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare('INSERT INTO users (first_name, last_name, email, username, password) VALUES (?, ?, ?, ?, ?)');
        $stmt->bind_param('sssss', $first_name, $last_name, $email, $username, $hashed_password);

        if ($stmt->execute()) {

            $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['username'] = $username;
            $_SESSION['user_role'] = 'user';  
            $_SESSION['success_message'] = "Registration successful! Redirecting...";
            header('Location: register.php');
            exit;
        } else {
            $errors[] = 'An error occurred while registering. Please try again.';
        }
        $stmt->close();
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
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Register</title>
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
            <ul><a href="login.php">Sign In</a></ul>
            <ul class="register"><a href="register.php">Register</a></ul>
        </nav>
    </header>

    <main>
        <form action="register.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo htmlspecialchars($_POST['first_name'] ?? ''); ?>" 
            <?php echo (in_array('First name is required.', $errors)) ? 'autofocus' : ''; ?> required><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo htmlspecialchars($_POST['last_name'] ?? ''); ?>" 
            <?php echo (in_array('Last name is required.', $errors)) ? 'autofocus' : ''; ?> required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" 
            <?php echo (in_array('Invalid email format.', $errors)) ? 'autofocus' : ''; ?> required><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>" 
            <?php echo (in_array('Username must be at least 3 characters long.', $errors) || in_array('Email or username already exists.', $errors)) ? 'autofocus' : ''; ?> required><br>

            <label for="password">Password:</label>
            <div class="password-container">
                <input type="password" id="password" name="password" 
                <?php echo (in_array('Password is required.', $errors)) ? 'autofocus' : ''; ?> required>
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
            
            <button type="submit">Register</button>

            <?php if (isset($_SESSION['success_message'])): ?>
                <div id="popup" class="popup">
                    <p style="color: white"><?php echo $_SESSION['success_message']; ?></p>
                </div>
                <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div>
                    <?php foreach ($errors as $error): ?>
                        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
                    <?php endforeach; ?>
                </div>
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

    <script>
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('popup').style.display = 'none';
                window.location.href = 'index.php';
            }, 1000);
        }
    </script>
</body>
</html>
