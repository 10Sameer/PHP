
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form Validation</title>
</head>
<body>
    <h2>PHP Form Validation</h2>
    
    <form method="POST">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p style="color: red;"><?php echo $error; ?></p>
</body>
</html>


<?php
$error = "";
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    do {
        
        if (empty($_POST["name"])) {
            $error = "Name is required.";
            break;
        }
        $name = htmlspecialchars($_POST["name"]);

        
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
            break;
        }
        $email = htmlspecialchars($_POST["email"]);

        
        $error = "Form submitted successfully!";
    } while (false);
}
?>
