<?php if (isset($_SESSION['user_id'])): ?>
                
                <?php if ($_SESSION['user_role'] === 'admin'): ?>
                    
                    <ul><a href="admin.php">Admin Page</a></ul>
                <?php endif; ?>
                <ul><a href="logout.php">Log Out</a></ul>
            <?php else: ?>
                
                <ul><a href="login.php">Sign In</a></ul>
                <ul><a href="register.php">Register</a></ul>
            <?php endif; ?>