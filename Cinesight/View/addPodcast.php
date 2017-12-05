<?php include('View/header.php');?>

<section id='addPodcast'>
<form action='index.php' method='POST' enctype="multipart/form-data">
    <span id ="podcastErrorMessage">
    <?php if (isset($pErrorMessage)) {
        echo htmlspecialchars($pErrorMessage);
    }?></span>
    <label>Podcast Name:</label>
    <input type='text' name='podcastName'><br><br>
    
    <label>Release Date: </label>
    <input type='date' name='releaseDate'><br><br>
    <label>Reviewed By: </label>
    <input type='text' name='reviewedBy'><br>

    <label>Runtime (Hours): </label>
    <input type='text' name='runtimeHours'><br>
    <label>Genre: </label>
    <input type='text' name='genre'><br><br>
    <label>Podcast Air Date: </label>
    <input type='date' name='airDate'><br><br>
    
    
    <label>Select your Image for the Podcast </label>
    <br><br>
    <input type='file' name='image'><br><br>
    
    <label>Select the Podcast audio. MP3's only please!</label>
    <br><br>
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

