<?php include('View/header.php'); ?>


<div id="select">
Select a Podcast!
</div>

<section id="podcastPlayer">
    <a href="footer.php"></a>
    <?php
    if (isset($selectedPodcast)) {
        podcast::podcastPlayer($selectedPodcast);
    }
    ?>
    
    
    <div id="podcasts">   

    <?php podcast::printPodcasts($allPodcasts) ?>
</div>


</section>

<?php include("View/footer.php");?>