<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
    <style>
        .error { color: red; 
            }
    </style>
</head>
<body>
    <?php
    $nameErr = $passwordErr = "";
    $name = $password = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            $nameErr = "Masukkan username";
        } else {
            $name = bersihkan_input($_POST["u"]);
        }
        if (empty($_POST["p"])) {
            $passwordErr = "Masukkan password";
        } else {
            $password = bersihkan_input($_POST["p"]);
        }
    }
    ?>

    <h2>Login Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passwordErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>