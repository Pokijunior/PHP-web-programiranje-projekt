<?php
session_start();
include('config.php');

$errors = [];

// Add
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $username, $password);
    if ($stmt->execute()) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
            $_SESSION['notification'] = 'New user successfully added!';
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit; 
    } else {
        echo "Error: " . $conn->error;
    }
}

// Delete
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    
    if ($stmt->execute()) {
        if (isset($_GET['delete_id'])) {
            $_SESSION['notification'] = 'User successfully deleted!';
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit; 
    } else {
        echo "Error: " . $conn->error;
    }
}

// Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_user'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;

    if ($password) {
        $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ?, username = ?, password = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $first_name, $last_name, $email, $username, $password, $id);
    } else {
        $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ?, username = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $first_name, $last_name, $email, $username, $id);
    }

    if ($stmt->execute()) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_user'])) {
            $_SESSION['notification'] = 'The user has been updated successfully!';
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit; 
    } else {
        echo "Greška: " . $stmt->error;
    }
    $stmt->close();
}



$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10; // page number
$offset = ($page - 1) * $limit;

$sql = "SELECT id, username, email, created_at FROM users role != 'admin' LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
$total_users_sql = "SELECT COUNT(*) AS total FROM users";
$total_users_result = $conn->query($total_users_sql);
$total_users = $total_users_result->fetch_assoc()['total'];
$total_pages = ceil($total_users / $limit);
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
    <link rel="stylesheet" href="styles/admin.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Admin page</title>
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
            <ul class="admin"><a href="admin.php">Admin Page</a></ul>
            <ul class="adminLogout"><a href="logout.php">Log Out</a></ul>
        </nav>
    </header>

    <main class="container">
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td>
                                <a href="admin.php?edit_id=<?= htmlspecialchars($row['id']) ?>">Update</a>
                                <a href="admin.php?delete_id=<?= htmlspecialchars($row['id']) ?>" onclick="return confirm('Sigurno želite obrisati ovog korisnika?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-danger">There are no users.</p>
        <?php endif; ?>

        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?= $page - 1 ?>">&laquo; Previous</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?= $i ?>" class="<?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?= $page + 1 ?>">Next &raquo;</a>
            <?php endif; ?>
        </div>

        <?php
        if (isset($_GET['edit_id'])) {
            $edit_id = $_GET['edit_id'];
            $sql = "SELECT * FROM users WHERE id = $edit_id";
            $result = $conn->query($sql);
            $user = $result->fetch_assoc();
        ?>
        
        <form action="admin.php" method="POST">
            <h3>Uredi korisnika</h3>
            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
            
            <label for="first_name">First name:</label>
            <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required>
            
            <label for="last_name">Last name:</label>
            <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($user['last_name']) ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
            
            <label for="password">Password (leave blank for no changes):</label>
            <input type="password" id="password" name="password">
            
            <button type="submit" name="edit_user">Update user</button>
        </form>
        <?php
        }
        ?>

        <form action="admin.php" method="POST">
            <h3>Add new user</h3>
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
            
            <button type="submit" name="add_user">Add</button>

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
                
            <?php if (isset($_SESSION['notification'])): ?>
                <div id="notification" class="notification show">
                    <?php echo $_SESSION['notification']; ?>
                </div>
                <?php unset($_SESSION['notification']); ?>
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
            var notification = document.getElementById("notification");
            if (notification) {
                setTimeout(function() {
                    notification.classList.remove("show");
                }, 2000);
            }
        };

        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            form.addEventListener("submit", function() {
                setTimeout(() => form.reset(), 100);
            });
        });
    </script>
</body>
</html>
