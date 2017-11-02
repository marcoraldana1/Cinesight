<?php

class podcastDB {

    function getPodcasts() {
        global $db;

        $query = 'Select * From podcasts';

        $allPodcasts = array();
        $statement = $db->prepare($query);
        $statement->execute();

        $podcasts = $statement->fetchAll();
        foreach($podcasts as $p) {
            $currentPodcast = new Podcast($p['podcastID'], $p['podcastName'], $p['releaseDate'], $p['reviewedBy'], $p['starring'], $p['runtimeMins'], $p['runtimeHours'], $p['genre'], $p['airDate'], $p['fileName']);
            array_push($allPodcasts, $currentPodcast);
        }
        
        $statement->closeCursor();

        return $allPodcasts;
    }
    
    function findPodcast($fileName) {
        global $db;
        
        $query = 'Select * From podcasts '
                . 'Where fileName = :fileName';
        $podcast =array();
        
        $statement = $db->prepare($query);
        $statement->bindValue('fileName', $fileName);
        $statement->execute();
       
        $podcast = $statement->fetchAll();
        
       $chosenPodcast = new Podcast($podcast[0]['podcastID'], $podcast[0]['podcastName'], $podcast[0]['releaseDate'], $podcast[0]['reviewedBy'], $podcast[0]['starring'], $podcast[0]['runtimeMins'], $podcast[0]['runtimeHours'], $podcast[0]['genre'], $podcast[0]['airDate'], $podcast[0]['fileName']);
        
        $statement->closeCursor();
        
        return $chosenPodcast;
        
        
    }

    function savePodcast($podcastName, $releaseDate, $reviewedBy, $starring, $runtimeMins, $runtimeHours, $genre, $airDate, $fileName) {
        global $db;
        $query = 'Insert Into podcasts
            (podcastName, releaseDate, reviewedBy, starring, runtimeMins, runtimeHours, genre, airDate, fileName)
            Values 
            (:podcastName, :releaseDate, :reviewedBy, :starring, :runtimeMins, :runtimeHours, :genre, :airDate, :fileName)';

        $statement = $db->prepare($query);
        $statement->bindValue(':podcastName', $podcastName);
        $statement->bindValue(':releaseDate', $releaseDate);
        $statement->bindValue(':reviewedBy', $reviewedBy);
        $statement->bindValue(':starring', $starring);
        $statement->bindValue(':runtimeMins', $runtimeMins);
        $statement->bindValue(':runtimeHours', $runtimeHours);
        $statement->bindValue(':genre', $genre);
        $statement->bindValue(':airDate', $airDate);
        $statement->bindValue('fileName', $fileName);
        
        $statement->execute();
        $statement->closeCursor();
    }

}
?>

