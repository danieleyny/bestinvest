<?php
    require "header.php"
?>
    <main class="logsituation">
        <h1> Sign Up</h1>    
        <form action="includes/signup.inc.php" method="post">
            <input class="wrapper-signup" type="text" name="uid" placeholder="Username">
            <br />
            <input class="wrapper-signup" type="text" name="mail" placeholder="Email">
            <br />
            <input class="wrapper-signup" type="password" name="pwd" placeholder="Password">
            <br />
            <input class="wrapper-signup" type="password" name="pwd-repeat" placeholder="Repeat Password">
            <br /><br />
            <button class="signupformbutton" type="submit" name="signup-submit"> Sign Up</button>
        </form>
    </main>

<?php
    require "footer.php";
?>  