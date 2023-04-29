<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
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
            width: 260px;
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
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);

    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn,$username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn,$password);

    //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE username='$username'
    and password='$password'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
    $_SESSION['username'] = $username;
    // Redirect user to index.php
    header("Location: index.php");
    }else{
    echo "<div class='form'>
    <h3>Username/password is incorrect.</h3>
    <br/>Click here to <a href='login.php'>Login</a></div>";
    }
    }else{
?>
<div class="container">
    <h1>Log In</h1>
    <form action="" method="post" name="login">
    <label for="username"><b>Username</b></label>
    <input type="text" name="username" placeholder="username" required />
    
    <label for="password"><b>Password</b></label>
    <input type="password" name="password" placeholder="Password" required />
    <input name="submit" type="submit" value="Login" />
    </form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>

<?php } ?>
</body>
</html>