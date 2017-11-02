<?php


class podcast {

    public $podcastID, $podcastName, $releaseDate, $reviewedBy, $starring,
            $runtimeMins, $runtimeHours, $genre, $airDate, $fileName;

    function __construct($podcastID, $podcastName, $releaseDate, $reviewedBy, $starring, $runtimeMins, $runtimeHours, $genre, $airDate, $fileName) {
        $this->podcastID = $podcastID;
        $this->podcastName = $podcastName;
        $this->releaseDate = $releaseDate;
        $this->reviewedBy = $reviewedBy;
        $this->starring = $starring;
        $this->runtimeMins = $runtimeMins;
        $this->runtimeHours = $runtimeHours;
        $this->genre = $genre;
        $this->airDate = $airDate;
        $this->fileName = $fileName;
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
     function getRuntimeMins() {
         return $this->runtimeMins;
     }
     
     function getRuntimeHours() {
         return $this->runtimeHours;
     }
    
    function getFileName() {
        return $this->fileName;
    }
    
    function setFileName($fileName) {
        $this->fileName = $fileName;
    }
    
    function savePodcast() {
        $podcastName = filter_input(INPUT_POST, 'podcastName');
        $releaseDate = filter_input(INPUT_POST, 'releaseDate');
        $reviewedBy = filter_input(INPUT_POST, 'reviewedBy');
        $starring = filter_input(INPUT_POST, 'starring');
        $runtimeMins = filter_input(INPUT_POST, 'runtimeMins');
        $runtimeHours= filter_input(INPUT_POST, 'runtimeHours');
        $genre = filter_input(INPUT_POST, 'genre');
        $airDate = filter_input(INPUT_POST, 'airDate');
        $fileName = filter_input(INPUT_POST, 'fileName');
        
        podcastDB::savePodcast($podcastName, $releaseDate, $reviewedBy,
                $starring, $runtimeMins, $runtimeHours, $genre, $airDate, $fileName);
    }
    
    function printPodcasts($allPodcasts) {
        foreach($allPodcasts as $p){
            
         echo "<form action='index.php' method = 'GET'>"
        . "<a href='index.php?action=playPodcast&selectedPodcast=".$p->getFileName()."'>"
       . "<img src='images/". $p->getFileName().".jpg' width='200' height='300'></a>";            
    }
    }
    
    function podcastPlayer($selectedPodcast) {
                    echo "<h1>".$selectedPodcast->getPodcastName()."<br>"
                    . "Released On: ".$selectedPodcast->getReleaseDate()."<br>"
                    . "Reviewed By: ".$selectedPodcast->getReviewedBy()."<br>"
                    . "Runtime: ".$selectedPodcast->getRuntimeMins()." mins / ".$selectedPodcast->getRuntimeHours()."<br></h1>"
                    . "<audio controls><source src='podcasts/audio/".$selectedPodcast->getFileName().".mp3' type='audio/mp3'></audio>"
                    . "<img src='images/" . $selectedPodcast->getFileName() . ".jpg' width='205' height='275'>";
    }
    
    

}
?>

