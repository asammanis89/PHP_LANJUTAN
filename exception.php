<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Exception Handling</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 20px 0;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            padding: 5px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    function loginUser($username, $password) {
        if (empty($username) || empty($password)) {
            throw new InvalidArgumentException("Username and password are required.");
        }
        // For demonstration purposes, the password is hardcoded.
        // In a real application, you should use hashed passwords.
        $validPassword = '123';
        if ($password !== $validPassword) {
            throw new RuntimeException("Incorrect password.");
        }
        $_SESSION['username'] = $username;
        session_regenerate_id(true); // Regenerate session ID upon login.
    }

    // Generate a CSRF token
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    $csrf_token = $_SESSION['csrf_token'];

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                throw new RuntimeException("Invalid CSRF token.");
            }

            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            loginUser($username, $password);
            header("Location: gallery.php");
            exit();
        } catch (InvalidArgumentException $e) {
            $error_message = htmlspecialchars($e->getMessage());
        } catch (RuntimeException $e) {
            $error_message = htmlspecialchars($e->getMessage());
        }
    }
    ?>

    <h2>Login Using Exception Handling</h2>
    <?php if (isset($error_message)) { ?>
        <p class="error">Error: <?php echo $error_message; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
        <button type="submit">Login</button>
    </form>
</body>
</html>
