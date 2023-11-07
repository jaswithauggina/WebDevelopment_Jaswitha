<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
          body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,#ddd6f3,#faaca8);
            text-align: left;
        }
        .container {
            max-width: 350px;
            margin: 0 auto;
            background: white;
            padding: 33px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: black;
            position: relative;
        }
        h2::before, h2::after {
            content: '';
            position: absolute;
            top: 35%;
            width: 35%; 
            height: 10px;
            border-radius: 5px;
            background: linear-gradient(to right,#ddd6f3,#faaca8);
        }

        h2::before {
            left: 0;
        }

        h2::after {
            right: 0;
        }
        form ,label {
            display: block;
            margin: 10px 0;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 87%;
            padding:10px;
            margin: 5px 0;
            border: 1.9px solid black;
            border-radius: 20px;
        }
        input[type="submit"] {
            background: linear-gradient(to right,#ddd6f3,#faaca8);
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            width:12rem;
            cursor: pointer;
            font-size: 20px;
            margin-top: 25px;
        }
        input[type="submit"]:hover {
            transition: background-color 0.3s, color 0.3s;
            background: linear-gradient(to right, #faaca8, #ddd6f3); 
            color: white; 
        }
        #error-message {
            color: red;
            display: none;
            margin-top: 10px;
        }
        .input-container {
    display: flex;
    flex-direction: column;
}

.icon {
    position: relative;
}

.icon i {
    position: absolute;
    top: 71%;
    left: 10px; /* Adjust the left position as needed */
    transform: translateY(-50%);
}

.icon input {
    padding-left: 30px; /* Adjust the padding-left to make space for the icon */
}

    </style>
</head>

<body>

<?php
    // Initialize variables for error and success messages
    $error = "";
    $success = "";

    // Define an array of allowed credentials
    $allowed_credentials = [
        'registered_username' => 'registered_password'
    ];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entered_username = $_POST["username"];
        $entered_password = $_POST["password"];

        // Check if the entered credentials are in the allowed list
        if (array_key_exists($entered_username, $allowed_credentials) &&
            $allowed_credentials[$entered_username] == $entered_password) {
            $success = "Login Successful!";
        } else {
            $error = "Invalid username or password. Please try again.";
        }
    }
?>

<div class="container">
<center><h2>Login</h2></center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="input-container">
    <div class="icon">
        <i class="fa fa-user"></i>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="icon">
        <i class="fa fa-lock"></i>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
</div>


   <center><input type="submit" value="Login"></center>
</form>

<?php
    if (!empty($error)) {
        echo '<div style="color: red;">' . $error . '</div>';
    }

    if (!empty($success)) {
        echo '<div style="color: green;">' . $success . '</div>';
    }
?>
</div>
</body>
</html>