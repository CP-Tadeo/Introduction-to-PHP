<?php
// Sample salt and stored hash values
session_start();
$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';

function checkCredentials($name, $password)
{
    global $salt, $stored_hash;
    // Calculate the hash of the provided password
    $md5 = hash('md5', $salt . $password);
    
    // Compare the hash with the stored hash
    if ($md5 === $stored_hash) {
        // Successful login, redirect to the game page
        header("Location: game.php?name=" . urlencode($name));
        return;
    } else {
        // Incorrect password
        $message = "Incorrect password";
    }
    
    return $message;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['who'];
    $password = $_POST['pass'];
    
    // Check for empty fields
    if (empty($name) || empty($password)) {
        $message = "User name and password are required";
    } else {
        // Validate the credentials
        $message = checkCredentials($name, $password);
        if ($message !== "Incorrect password") {
            // If login is successful, store the user's name in a session variable
            $_SESSION['name'] = $name;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="who">Name:</label>
        <input type="text" name="who" required>
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" required>
        <br>
        <input type="submit" value="Log In">

    </form>
</body>
</html>
