<?php
    include_once 'header.php'
?>

    <section class ="sign-up">
        <h2>Hello! Welcome Back.</h2><br>
        <form action="signin-inc.php" method="post">
            <input type="text" name="email" placeholder="Email"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
        </form>
        <br>
        <a href = signup.php>Sign Up</a>
        <button type = "submit" name="submit">Sign in</button>
        
    </section>
    
  
<?php
    include_once 'footer.php'
?>