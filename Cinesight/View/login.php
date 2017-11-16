<?php include('View/header.php')?>


<section id='login'>
    <?php if(isset($loginError)) echo htmlspecialchars($loginError); ?>
    <form action='index.php' method='POST'>
        <label>Username: </label>
        <input type='text' name='username'><br><br>
        
        <label>Password: </label>
        <input type='password' name='password'><br><br>
        
        <input type='submit' value="Login">
        <input type="hidden" name="action" value="checkLogin">
        
        <h3>Not a member? No Problem!</h3>
        <a href='index.php?action=register'>Register now!</a>
        
    </form>
    
    
</section>

<?php include('View/footer.php')?>

