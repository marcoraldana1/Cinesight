<?php include("View/header.php"); ?>

<div id="select">
Select a Review!
</div>
<div id="podcasts">   
    <?php reviews::printReviews($allReviews) ?>
</div>


<?php include("View/footer.php"); ?>

