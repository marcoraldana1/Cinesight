<?php include('View/header.php'); ?>

<div id="podcast">
    <section id="podcastPlayer">
        <?php
        if (isset($selectedPodcast)) {
            podcast::podcastPlayer($selectedPodcast);
        }
        ?>
    </section>
</div>

<?php if(isset($_SESSION['userRole']) && $_SESSION['userRole'] === "Admin"):?>
<form action='index.php' method ='POST'>
    <input type='submit' value='Add a podcast'>
    <input type='hidden' name='action' value='addPodcast'>
</form>
<?php endif;?>

<form action ="index.php" method='POST'>
    <input type='submit' value='Login'>
    <input type='hidden' name='action' value='login'>
</form>
    
 <div id="podcasts">   
<?php podcast::printPodcasts($allPodcasts)?>
 </div>


<?php include('View/footer.php'); ?>

