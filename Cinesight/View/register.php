<?php include('View/header.php')?>

         <span id="error">
            
            <?php 
            if(isset($errorMessage)) {
                echo htmlspecialchars($errorMessage);
            }?>
        </span>
<section id='register'>
    <form action='index.php' method='POST'>
        
        <h3>Become a Member! Just enter some basic info</h3><br><br>
        

        
        <label>First Name: </label>           
        <input type='text' name='firstName' value="<?php if(isset($firstName)) echo htmlspecialchars($firstName);?>"><br><br>
        
        <label>Last Name: </label>
        <input type='text' name='lastName' value="<?php if(isset($lastName)) echo htmlspecialchars($lastName);?>"><br><br>
        
        <label>User Name: </label>
        <input type='text' name='userName' value="<?php if(isset($userName)) echo htmlspecialchars($userName);?>"><br><br>
      
        <label>Email Address: </label>
        <input type='text' name='emailAddress' value="<?php if(isset($email)) echo htmlspecialchars($email);?>"><br><br>
        
        <label>Password: </label>
        <input type='text' name='password'><br><br>
        
        <label>Confirm Password: </label>
        <input type='text' name='confirmPassword'><br><br>
        
        <label>Favorite Movie: </label>
        <input type='text' name='favoriteMovie' value="<?php if(isset($favMovie)) echo htmlspecialchars($favMovie);?>"><br><br>
        
        <input type='submit' value='Become a member now!'>
        <input type='hidden' name='action' value='confirmRegistration'>
        

    
    </form>
</section>

<?php include('View/footer.php')?>

