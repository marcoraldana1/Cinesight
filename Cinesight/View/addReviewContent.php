<?php include('View/header.php'); ?>

<section id='addReviewContent'>
    
    <form action='index.php' method="POST">
    <br>
    <label>Enter Main Heading: </label><br>
    <input type='text' name='mainHeading'><br><br>

    <label>Enter Main Paragraph: </label><br>
    <textarea name='mainParagraph' rows='10' cols='100'></textarea><br><br>

    <label>Enter Sub Heading 1: </label><br>
    <input type='text' name='subHeading1'><br><br>

    <label>Enter Sub Paragraph 1 :</label><br>
    <textarea name = 'subParagraph1' rows='10' cols='100'></textarea><br><br>
    
    <label>Enter Sub Heading 2: </label><br>
    <input type='text' name='subHeading2'><br><br>
    
    <label>Enter Sub Paragraph 2: </label><br>
    <textarea name = 'subParagraph2' rows='10' cols='100'></textarea><br><br>
    
    <label>Enter End Heading: </label><br>
    <input type='text' name='endHeading'><br><br>
    
    <label>Enter End Paragraph: </label><br>
    <textarea name='endParagraph' rows='10' cols='100'></textarea><br><br>


    <input type='submit' value='Finish Review'>
    <input type='hidden' name='action' value='finishReview'>
    
    </form>
</section>

<?php include('View/footer.php'); ?>

