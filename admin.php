<?php 
session_start();

if(!empty($_SESSION['id'])) {
    header('Location: dashboard.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./js/index.js" defer></script>
    <title>Login</title>
</head>
<body>
    <header>
        Pharmacy Management System
    </header>
    <main>
        <form method="post">
            <div class="inputs-error"></div>
            <input type="text" name="username" placeholder="Username" id="username">
            <input type="password" name="password" placeholder="Password" id="password">
            <div class="opt-container">
                <div>
                    <a href="create_account.php">Don't have an account?</a>
                </div>
                <div>
                    <button class="submit-button" value="admins">Submit</button>
                </div>
            </div>
        </form>
    </main>
    <footer>
        © 2024 --xDev All rights reserved.
    </footer>
</body>
</html>
