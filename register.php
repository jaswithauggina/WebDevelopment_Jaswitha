<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,#ddd6f3,#faaca8);
            text-align: left;
        }
        .container
        {
            max-width: 500px;
            margin: 0 auto;
            background:#fff;
            padding: 35px;
            border-radius: 21px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h2
        {
            color: black;
            position: relative;
        }
        h2::before, h2::after
        {
            content: '';
            position: absolute;
            top: 35%;
            width: 33%; 
            height: 10px;
            background: linear-gradient(to right,#ddd6f3,#faaca8);
            border-radius: 5px;
        }

        h2::before
        {
            left: 0;
        }

        h2::after 
        {
            right: 0;
        }
        form 
        {
         margin-top: 20px;
        }
        label 
        {
            display: block;
            margin: 10px 0;
            color: #333;
            font-weight: 900px;
        }

        .password-container input[type="password"] 
        {
            width: 48%; /* Set the width for each password field */
        }
        input[type="name"],input[type="username"],input[type="confirmPassword"],input[type="phone"],input[type="bdate"]
        input[type="password"],
        input[type="email"] 
        {
            width: 100px;
            margin: 5px 0;
            font-size:30px;
            border: 6px solid gray;
            border-radius: 7px;
        }
        input
        {
            height:2em;
            width:28.5rem;
            border-radius: 20px;
        }
        input[type="submit"]
        {
            background: linear-gradient(to right,#ddd6f3,#faaca8);
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            width:30.8rem;
            cursor: pointer;
            font-size: 20px;
            margin-top: 25px;
        }
        input
        {
            padding:0.5rem;
            padding-right: 30px;
        
        }
        input[type="submit"]:hover 
        {
            transition: background-color 0.3s, color 0.3s;
            background: linear-gradient(to right, #faaca8, #ddd6f3); 
            color: white; 
        }

    </style>
</head>
<body>
    <div class="container">
        <h2 align="center">Sign Up</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $bdate = $_POST['bdate'];
            if ($password === $confirmPassword) 
            {
                header("Location: login.php?username=$username&password=$password");
                exit;
            }
            else 
            {
                echo '<div style="color: red;">Passwords do not match. Please try again.</div>';
            }
        }
        ?>
<form action="" method="POST" >
<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your full name" required pattern="[A-Za-z ]+" title="Please enter a valid name with alphabets only">
</div>

<div>
		<label for="username">Username</label>
		<input type="text" id="username" name="username" placeholder="Enter a username" required>
</div>
<div>
                <label for="password">Create Password</label>
                <input type="password" id="pass" name="password" maxlength="8" placeholder="Enter your password" required>
    </div>
    <div>

                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" maxlength="8" placeholder="Confirm your password" required>
            </div>
            <div>
    <label for="email">Email address</label>
    <input type="text" id="email" name="email" placeholder="sfdh@gmail.com" required pattern="[a-zA-Z0-9._%+-]+@gmail.com" title="Please enter a valid email address">
</div>


<div>
    <label for="phone">Phone number</label>
    <input type="tel" id="phone" name="phone" placeholder="1234567890" required pattern="\d{10}" title="Please enter a 10-digit phone number">
</div>
<div>
		<label for="bdate">Date of birth</label>
		<input type="date" id="bdate" name="bdate" >
</div>

<div>
		<center><input type="submit" value="Register" ></center>
	
</div>



</form>

    </div>
</body>
</html>
