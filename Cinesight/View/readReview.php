<?php include('View/header.php'); ?>
<div class="row">
    <div class='column left'>
    <img src='reviewImages/<?php echo htmlspecialchars($selectedReview->GetReviewImage()) ?>' width='400' height='600'>
    </div>
    
    <div class='column right'>
    <h1><?php echo htmlspecialchars($selectedReview->GetReviewName()) ?></h1>
    <h2>Reviewed By: <?php echo htmlspecialchars($selectedReview->GetReviewedBy()) ?></h2>
    <h3>Starring: <?php echo htmlspecialchars($selectedReview->GetStarring()) ?></h3>
    <h3>Runtime: <?php echo htmlspecialchars($selectedReview->GetRuntimeHours()) ?></h3>
    </div>
    
</div>


<section id='reviewContent'>
    <h4><?php echo htmlspecialchars($selectedReview->GetMainHeading())?></h4>
    <p><?php echo htmlspecialchars($selectedReview->GetMainParagraph()) ?></p>
    
    <h4><?php echo htmlspecialchars($selectedReview->GetSubHeading1()) ?></h4>
    <p><?php echo htmlspecialchars($selectedReview->GetSubParagraph1()) ?></p>
    
    <h4><?php echo htmlspecialchars($selectedReview->GetSubHeading2()) ?></h4>
    <p><?php echo htmlspecialchars($selectedReview->GetSubParagraph2()) ?></p>
    
    <h4><?php echo htmlspecialchars($selectedReview->GetEndHeading()) ?></h4>
    <p><?php echo htmlspecialchars($selectedReview->GetEndParagraph()) ?></p>
               
         </section>
<?php include('View/footer.php'); ?>

