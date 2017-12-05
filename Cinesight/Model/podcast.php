<?php


class podcast {

    public $podcastID, $podcastName, $releaseDate, $reviewedBy,
            $runtimeHours, $genre, $airDate, $imageName, $audioName;

    function __construct($podcastID, $podcastName, $releaseDate, $reviewedBy,  $runtimeHours, $genre, $airDate, $imageName, $audioName) {
        $this->podcastID = $podcastID;
        $this->podcastName = $podcastName;
        $this->releaseDate = $releaseDate;
        $this->reviewedBy = $reviewedBy;
        $this->runtimeHours = $runtimeHours;
        $this->genre = $genre;
        $this->airDate = $airDate;
        $this->imageName = $imageName;
        $this->audioName = $audioName;
    }
    
    function getPodcastName() {
        return $this->podcastName;
    }
    
    function getReleaseDate() {
        return $this->releaseDate;
    }
    
    function getReviewedBy() {
        return $this->reviewedBy;
    }
     
     function getRuntimeHours() {
         return $this->runtimeHours;
     }
    
    function getImageName() {
        return $this->imageName;
    }
    
    function setImageName($fileName) {
        $this->imageName = $imageName;
    }
    
    function getAudioName() {
        return $this->audioName;
    }
    
    function setAudioName($audioName) {
        $$this->audioName = $audioName;
    }
    
    function savePodcastFile($location) {
        $fileName = $_FILES['audio']['name'];
        $fileType = $_FILES['audio']['type'];
        
        podcastDB::savePodcastFile($fileName, $fileType, $location);
    }
    
    function savePodcast() {
        $podcastName = filter_input(INPUT_POST, 'podcastName');
        $releaseDate = filter_input(INPUT_POST, 'releaseDate');
        $reviewedBy = filter_input(INPUT_POST, 'reviewedBy');
        $runtimeHours= filter_input(INPUT_POST, 'runtimeHours');
        $genre = filter_input(INPUT_POST, 'genre');
        $airDate = filter_input(INPUT_POST, 'airDate');
        $imageName = $_FILES['image']['name'];
        
        podcastDB::savePodcast($podcastName, $releaseDate, $reviewedBy,
                $runtimeHours, $genre, $airDate, $imageName);
    }
    
    function printPodcasts($allPodcasts) {
        foreach($allPodcasts as $p){
            
         echo "<form action='index.php' method = 'GET'>"
        . "<a href='index.php?action=playPodcast&selectedPodcast=".$p->getImageName()."'>"
       . "<img src='images/". $p->getImageName()."' width='200' height='300'></a>";            
    }
    }
    
    function podcastPlayer($selectedPodcast) {
                    echo "<h1>".$selectedPodcast->getPodcastName()."<br>"
                    . "Released On: ".$selectedPodcast->getReleaseDate()."<br>"
                    . "Reviewed By: ".$selectedPodcast->getReviewedBy()."<br>"
                    . "Runtime: ".$selectedPodcast->getRuntimeHours()."<br></h1>"
                    . "<audio controls><source src='podcasts/audio/".$selectedPodcast->getAudioName()." ' type='audio/mp3'></audio>"
                    . "<img src='images/" . $selectedPodcast->getImageName() . " ' width='205' height='275'>";
    }
    
    
    

}
?>

