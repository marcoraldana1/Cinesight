<?php include('View/header.php'); ?>

<div id="podcast">
    <?php if(isset($_SESSION['user'])) {
        echo "Welcome ".$_SESSION['user']."!";
    }; ?>
    <section id="podcastPlayer">
        <?php
        if (isset($selectedPodcast)) {
            podcast::podcastPlayer($selectedPodcast);
        }
        ?>
    </section>
</div>

<form action='index.php' method ='POST'>
    <input type='submit' value='Add a podcast'>
    <input type='hidden' name='action' value='addPodcast'>
</form>

<form action ="index.php" method='POST'>
    <input type='submit' value='Login'>
    <input type='hidden' name='action' value='login'>
</form>
    
 <div id="podcasts">   
<?php podcast::printPodcasts($allPodcasts)?>
 </div>
</section>


<?php include('View/footer.php'); ?>

