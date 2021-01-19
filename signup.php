<?php
    include_once 'header.php'
?>

    <section class ="sign-up">
        <h2>Join Us.</h2><br>
        <form action="signup-inc.php" method="post">
            <input type="text" name="name" placeholder="Full name"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="password" name="pwd" placeholder="Confirm password"><br>
        </form>
        <br>
        <a href = signin.php>Sign In</a>
        <button type = "submit" name="submit">Register</button>
        
    </section>
    
  
<?php
    include_once 'footer.php'
?>