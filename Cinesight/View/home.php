<?php include('View/header.php'); ?>

<div id="homePage">
    
    <form action="index.php" method="POST">
        <label>Get Listening</label><br>
        <input type="submit" Value="All Podcasts">
        <input type="hidden" name="action" value="allPodcasts">
    </form><br><br>
    
    
    <form action="index.php" method='POST'>
        <label>Get Reading</label><br>
        <input type="submit" value="All Reviews">
        <input type="hidden" name="action" value="allReviews">
    </form>
</div>

<?php include('View/footer.php'); ?>

