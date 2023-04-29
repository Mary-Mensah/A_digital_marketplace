<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #f2f2f2;
            
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #fff;
            padding: 2rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            width: 400px;
        }
        
        h2 {
            margin-bottom: 2rem;
        }
        
        label {
            display: block;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        
        input {
            padding: 0.5rem;
            border-radius: 5px;
            border: none;
            margin-bottom: 1rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            width: 260px;
        }
        
        button {
            background: #4CAF50;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        
        button:hover {
            background: #3e8e41;
        }
        
        #register-form {
            display: none;
        }
        
        .switch-form {
            margin-top: 1rem;
            text-align: center;
            font-size: 1.1rem;
            color: #777;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
    </head>
<body>
    <?php
    require('connection.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    // removes backslashes

    $username = stripslashes($_POST['username']);
    
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn,$username); 
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn,$email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn,$password);
    $trn_date = date("Y-m-d H:i:s");
    $query = "INSERT into `users` (username, password, email, trn_date)
    VALUES ('$username', '$password', '$email', '$trn_date')";
    $result = mysqli_query($conn,$query);

    if($result){
    echo "<div class='form'>
    <h3>You are registered successfully.</h3>
    <br/>Click here to <a href='login.php'>Login</a></div>";
    }
    }else{
    
    ?>
    <div class="container">

<form action="" method="POST">
    <h2>Registration form</h2>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="register">Register</button>
</form>
</div>
    <?php } ?>
</body>
</html>