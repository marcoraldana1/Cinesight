<?php include('View/header.php'); ?>

    <span id ="error">
    <?php if (isset($errorMessage)) {
        echo htmlspecialchars($errorMessage);
    }?></span>

<section id="addReviewInfo">
    <form action='index.php' method='POST' enctype='multipart/form-data'>
        
        <label>Review Name: </label>
        <input type='text' name='reviewName' value='<?php if(isset($reviewName)) echo htmlspecialchars($reviewName) ?>'><br>
        
        <label>Reviewed By: </label>
        <input type='text' name='reviewedBy' value='<?php if(isset($reviewedBy)) echo htmlspecialchars($reviewedBy) ?>'><br>
        
        <label>Runtime: </label>
        <input type='text' name='runtimeHours' value='<?php if(isset($runtimeHours)) echo htmlspecialchars($runtimeHours) ?>'><br>
        
        <label>Starring: </label>
        <input type='text' name='starring' value='<?php if(isset($starring)) echo htmlspecialchars($starring) ?>'><br><br>
        
        
        <label>Upload your review image here: </label><br>
        <input type='file' name='reviewImage'><br><br>
        
        <input type='submit' value='Add Content'>
        <input type='hidden' name='action' value='addReviewContent'>
        
    </form>
</section>

<?php include('View/footer.php'); ?>

