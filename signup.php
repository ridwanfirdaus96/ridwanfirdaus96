<?php include_once('header.php');?>

<p>  </p>
<h2>Daus Shop</h2>

<form action="aksi_signup.php">
    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        <input type="checkbox" checked="checked">Remember me
        <p>By Creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>        

<?php include_once('footer.php');?>

<h1></h1>
</body>
</html>
