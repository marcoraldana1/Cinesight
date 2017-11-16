<?php include('View/header.php'); ?>

<section id="fileUpload">
    <h3>Step 1: Upload your Podcast</h3>
    <form action='index.php' method ='POST' enctype='multipart/form-data'>
        <input type='file' name="file"><br><br>
        
        <input type='submit' value='Submit'>
        <input type='hidden' name='action' value='uploadFiles'>
    </form>


</section>


<?php include('View/footer.php'); ?>

