<?php

class podcastDB {

    function getPodcasts() {
        global $db;

        $query = 'Select podcast_files.podcastID, podcastName, releaseDate, reviewedBy, runtimeMins, runtimeHours, genre, airDate,  images.fileName, podcast_files.fileName
                from podcast_files JOIN podcast_info ON
                podcast_files.podcastID = podcast_info.podcastID
                Join images ON
                podcast_files.podcastID = images.imageID';

        $allPodcasts = array();
        $statement = $db->prepare($query);
        $statement->execute();

        $podcasts = $statement->fetchAll();
        foreach($podcasts as $p) {
            $currentPodcast = new Podcast($p['podcastID'], $p['podcastName'], $p['releaseDate'], $p['reviewedBy'], $p['runtimeMins'], $p['runtimeHours'], $p['genre'], $p['airDate'], $p[8],$p[9]);
            array_push($allPodcasts, $currentPodcast);
        }
        
        $statement->closeCursor();

        return $allPodcasts;
    }
    
    function findPodcast($fileName) {
        global $db;
        
        $query = 'Select podcast_files.podcastID, podcastName, releaseDate, reviewedBy, runtimeMins, runtimeHours, genre, airdate, images.fileName, podcast_files.fileName
                from podcast_files JOIN podcast_info ON
                podcast_files.podcastID = podcast_info.podcastID
                Join images ON
                podcast_files.podcastID = images.imageID
                Where images.fileName = :fileName';
        $podcast =array();
        
        $statement = $db->prepare($query);
        $statement->bindValue(':fileName', $fileName);
        $statement->execute();
       
        $podcast = $statement->fetchAll();
        
       $chosenPodcast = new Podcast($podcast[0]['podcastID'], $podcast[0]['podcastName'], $podcast[0]['releaseDate'], $podcast[0]['reviewedBy'],  $podcast[0]['runtimeMins'], $podcast[0]['runtimeHours'], $podcast[0]['genre'], $podcast[0][7], $podcast[0][8], $podcast[0][9]);
        
        $statement->closeCursor();
        
        return $chosenPodcast;
        
        
    }
    
    function saveImageFile($fileName, $fileType, $location) {
            global $db;
        
        $query = 'Insert Into images
                (fileName, fileType, location)
                Values
                (:fileName, :fileType, :location)';
        
        $statement = $db->prepare($query);
        
        $statement->bindValue(':fileName', $fileName);
        $statement->bindValue(':fileType', $fileType);
        $statement->bindValue(':location', $location);
        
        $statement->execute();
        $statement->closeCursor();
    }

    function savePodcast($podcastName, $releaseDate, $reviewedBy, $runtimeMins, $runtimeHours, $genre, $airDate) {
        global $db;
        $query = 'Insert Into podcast_info
            (podcastName, releaseDate, reviewedBy,  runtimeMins, runtimeHours, genre, airDate)
            Values 
            (:podcastName, :releaseDate, :reviewedBy,  :runtimeMins, :runtimeHours, :genre, :airDate)';

        $statement = $db->prepare($query);
        $statement->bindValue(':podcastName', $podcastName);
        $statement->bindValue(':releaseDate', $releaseDate);
        $statement->bindValue(':reviewedBy', $reviewedBy);
        $statement->bindValue(':runtimeMins', $runtimeMins);
        $statement->bindValue(':runtimeHours', $runtimeHours);
        $statement->bindValue(':genre', $genre);
        $statement->bindValue(':airDate', $airDate);

        $statement->execute();
        $statement->closeCursor();
    }
    
    function savePodcastFile($fileName, $fileType, $location) {
        global $db;
        
        $query = 'Insert Into podcast_files
                (fileName, fileType, location)
                Values
                (:fileName, :fileType, :location)';
        
        $statement = $db->prepare($query);
        
        $statement->bindValue(':fileName', $fileName);
        $statement->bindValue(':fileType', $fileType);
        $statement->bindValue(':location', $location);
        
        $statement->execute();
        $statement->closeCursor();
    }

}
?>

