<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <header>
        <nav class="navbar">
            <img class="logo" src="image/Eyny.CoLightBlue.png" alt="daniel eyny's logo">
            <ul class="navlinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul> 
                <ul>
                    <form action="includes/login.inc.php" method="post">
                        <input class="usernamepw" type="text" name="mailuid" placeholder="Username/Email...">
                        <input class="usernamepw" type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit"> Login </button>
                        <a class ="headersignup" href="signup.php"> Sign Up</a>
                        <form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>
                    </form>
                    
                </ul>
        </nav>
    </header>







</body>
</html>