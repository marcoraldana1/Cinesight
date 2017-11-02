<?php include('View/header.php');?>

<section id='addPodcast'>
<form action='index.php' method='POST'>
    <label>Podcast Name:</label>
    <input type='text' name='podcastName'><br>
    <label>Release Date: </label>
    <input type='text' name='releaseDate'><br>
    <label>Reviewed By: </label>
    <input type='text' name='reviewedBy'><br>
    <label>Starring: </label>
    <input type='text' name='starring'><br>
    <label>Runtime (Minutes): </label>
    <input type='text' name='runtimeMins'><br>
    <label>Runtime (Hours): </label>
    <input type='text' name='runtimeHours'><br>
    <label>Genre: </label>
    <input type='text' name='genre'><br>
    <label>Podcast Air Date: </label>
    <input type='text' name='airDate'><br>
    <label>File Name: </label>
    <input type='text' name='fileName'><br><br>
    
    <input type='submit' value='Save Podcast'>
    <input type='hidden' name='action' value='savePodcast'>
</form>
    
    <form action='index.php' method='POST'>
        <input type='submit' value='Go Home'>
        <input type='hidden' name='action' value='initialHome'>
    </form>
</section>


<?php include('View/footer.php');

