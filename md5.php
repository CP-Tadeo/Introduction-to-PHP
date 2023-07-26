<?php
function crackMD5($md5Hash)
{
    $validChars = '0123456789'; // The character set for the PIN (four-digit numbers)

    $startTime = microtime(true); // Record the start time

    for ($a = 0; $a < strlen($validChars); $a++) {
        for ($b = 0; $b < strlen($validChars); $b++) {
            for ($c = 0; $c < strlen($validChars); $c++) {
                for ($d = 0; $d < strlen($validChars); $d++) {
                    // Generate the current four-digit PIN
                    $pin = $validChars[$a] . $validChars[$b] . $validChars[$c] . $validChars[$d];
                    
                    // Hash the PIN using MD5
                    $hashedPin = hash('md5', $pin);

                    // Print the attempt (optional challenge)
                    echo "Attempt: PIN: $pin, MD5 Hash: $hashedPin<br>";

                    // Check if the generated hash matches the input MD5 hash
                    if ($hashedPin === $md5Hash) {
                        // Stop the loops and print the result
                        echo "PIN: $pin<br>";
                        $endTime = microtime(true);
                        $elapsedTime = $endTime - $startTime;
                        echo "Elapsed Time: $elapsedTime seconds";
                        return;
                    }
                }
            }
        }
    }

    // If no match found, print "Not found"
    echo "PIN: Not found<br>";
    $endTime = microtime(true);
    $elapsedTime = $endTime - $startTime;
    echo "Elapsed Time: $elapsedTime seconds";
}

// Check if the form is submitted
if (isset($_GET['md5'])) {
    // Get the MD5 hash from the form input
    $md5Hash = $_GET['md5'];

    // Call the function to crack the MD5 hash
    crackMD5($md5Hash);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MD5 Hash Cracker</title>
</head>
<body>
    <h1>MD5 Hash Cracker</h1>
    <form method="get">
        <label for="md5">Enter MD5 Hash:</label>
        <input type="text" name="md5" size="40">
        <input type="submit" value="Crack">
    </form>
</body>
</html>
