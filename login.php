<?php
// Define valid username and password
$validUsername = "Bal";
$validPassword = "password123";

// Initialize error message variable
$errorMsg = "";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Validate username and password
    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        // Redirect to home page if credentials are correct
        header("Location: main.html");
        exit();
    } else {
        // Set the error message
        $errorMsg = "Login failed. Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
        }
        label {
            font-size: 0.9em;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #0fb300;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0fb300;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login Page</h1>
        <form method="POST" action="login.php">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            
            <button type="submit">Login</button>
            <?php if (!empty($errorMsg)) { ?>
                <div class="error-message">
                    <?php echo $errorMsg; ?>
                </div>
            <?php } ?>
        </form>
        
    </div>

</body>
</html>