<?php
// Check if the user's name is set in the session, if not, exit with an error message
session_start(); // Start the session to access session variables

// Check if the user's name is set in the session, if not, exit with an error message
if (!isset($_SESSION['name'])) {
    die("Name parameter missing");
}
function check($computer, $human) {
    // Array representing the three plays (Rock, Paper, Scissors)
    $plays = array('Rock', 'Paper', 'Scissors');
    
    // Calculate the result of the game
    $diff = ($computer - $human + 3) % 3;
    if ($diff == 0) {
        return "Tie";
    } elseif ($diff == 1) {
        return "You Lose";
    } else {
        return "You Win";
    }
}

// Array representing the three plays (Rock, Paper, Scissors)
$plays = array('Rock', 'Paper', 'Scissors');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's play from the form
    $userPlay = $_POST['play'];

    // Randomly choose the computer's play
    $computerPlay = rand(0, 2);
    
    // Check the result of the game
    $result = check($computerPlay, $userPlay);
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Rock-Paper-Scissors</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['name']; ?></h1>
    <form method="post">
        <select name="play">
            <?php foreach ($plays as $key => $play) : ?>
                <option value="<?php echo $key; ?>"><?php echo $play; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" name="submit" value="Play">
        <input type="submit" name="logout" value="Logout">
    </form>
    <?php if (isset($result)) : ?>
        <p>Computer Play: <?php echo $plays[$computerPlay]; ?></p>
        <p>Your Play: <?php echo $plays[$userPlay]; ?></p>
        <p>Result: <?php echo $result; ?></p>
    <?php endif; ?>
    <br>
    <form method="post">
        <input type="submit" name="test" value="Test">
    </form>
    <?php
    if (isset($_POST['test'])) {
        for ($c = 0; $c < 3; $c++) {
            for ($h = 0; $h < 3; $h++) {
                $r = check($c, $h);
                echo "Computer Play: ".$plays[$c]." Human Play: ".$plays[$h]." Result: ".$r."<br>";
            }
        }
    }
    ?>
</body>
</html>
