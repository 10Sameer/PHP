<?php
session_start();

// Generate a random number if not already set
if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100);
}


$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['guess'])) {
        $guess = (int)$_POST['guess'];

        if ($guess < $_SESSION['number']) {
            $message = "❌ Too low! Try again.";
        } elseif ($guess > $_SESSION['number']) {
            $message = "❌ Too high! Try again.";
        } else {
            $message = "🎉 Correct! You guessed the number.";
            session_destroy(); 
        }
    } elseif (isset($_POST['reset'])) {
        session_destroy(); 
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            background: white;
            padding: 20px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
            margin-bottom: 15px;
        }
        input[type="number"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            background-color: #dc3545;
        }
        input[type="submit"]:hover {
            background-color:  #c82333;
        }

        input[name="reset"]:hover {
            background-color: #c82333;
        }

        .message {
            font-size: 20px;
            font-weight: bold;
            color: #555;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🎯 PHP Guessing Game</h2>
        <p>Guess a number between 1 and 100</p>
    
        <form method="POST">
            <input type="number" name="guess" min="1" max="100" required>
            <input type="submit" value="Submit">
            <input type="submit" name="reset" value="Restart Game">
        </form>
    
        <p class="message"><?php echo $message; ?></p>
    </div>
</body>
</html>
