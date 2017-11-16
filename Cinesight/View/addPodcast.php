<?php include('View/header.php');?>

<section id='addPodcast'>
<form action='index.php' method='POST' enctype="multipart/form-data">
    <label>Podcast Name:</label>
    <input type='text' name='podcastName'><br>
    <label>Release Date: </label>
    <input type='text' name='releaseDate'><br>
    <label>Reviewed By: </label>
    <input type='text' name='reviewedBy'><br>

    <label>Runtime (Minutes): </label>
    <input type='text' name='runtimeMins'><br>
    <label>Runtime (Hours): </label>
    <input type='text' name='runtimeHours'><br>
    <label>Genre: </label>
    <input type='text' name='genre'><br>
    <label>Podcast Air Date: </label>
    <input type='text' name='airDate'><br>
    
    
    <label>Select your Image for the Podcast </label>
    <br>
    <input type='file' name='image'><br><br>
    
    <label>Select the podcast audio. MP3's only please!</label>
    <br>
    <input type='file' name='audio'><br><br>
    
    <input type='submit' value='Save Podcast'>
    <input type='hidden' name='action' value='savePodcast'>
</form>
    
    <form action='index.php' method='POST'>
        <input type='submit' value='Go Home'>
        <input type='hidden' name='action' value='initialHome'>
    </form>
</section>


<?php include('View/footer.php');

