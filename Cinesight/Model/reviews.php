<?php

class Reviews {

    private $reviewName, $runtimeHours, $starring, $reviewImage, $mainHeading,
            $mainParagraph, $subheading1, $subParagraph1, $subheading2, $subParagraph2,
            $endHeading, $endParagraph, $reviewedBy;

    function _construct($reviewName, $runtimeHours, $starring, $reviewImage, $mainHeading, $mainParagraph, $subheading1, $subParagraph1, $subheading2, $subParagraph2, $endHeading, $endParagraph, $reviewedBy) {

        $this->reviewName = $reviewName;
        $this->runtimeHours = $runtimeHours;
        $this->starring = $starring;
        $this->reviewImage = $reviewImage;

        $this->mainHeading = $mainHeading;
        $this->mainParagraph = $mainParagraph;
        $this->subheading1 = $subheading1;
        $this->subParagraph1 = $subParagraph1;
        $this->subheading2 = $subheading2;
        $this->subParagraph2 = $subParagraph2;

        $this->endHeading = $endHeading;
        $this->endParagraph = $endParagraph;
        $this->reviewedBy = $reviewedBy;
    }

    function GetReviewName() {
        return $this->reviewName;
    }

    function SetReviewName($reviewName) {
        $this->reviewName = $reviewName;
    }

    function GetRuntimeHours() {
        return $this->runtimeHours;
    }

    function SetRuntimeHours($runtimeHours) {
        $this->runtimeHours =$runtimeHours;
    }

    function GetStarring() {
        return $this->starring;
    }

    function SetStarring($starring) {
        $this->starring = $starring;
    }

    function GetReviewImage() {
        return $this->reviewImage;
    }

    function SetReviewImage($reviewImage) {
        $this->reviewImage = $reviewImage;
    }

    function GetMainHeading() {
        return $this->mainHeading;
    }

    function SetMainHeading($mainHeading) {
        $this->mainHeading = $mainHeading;
    }
    
    function GetMainParagraph() {
        return $this->mainParagraph;
    }
    
    function SetMainParagaph($mainParagraph) {
        $this->mainParagraph = $mainParagraph;
    }
    
    
    function GetSubHeading1() {
        return $this->subheading1;
    }
    
    function SetSubHeading1($subheading1) {
        $this->subheading1 = $subheading1;
    }
    
    function GetSubParagraph1() {
        return $this->subParagraph1;
    }
    
    function SetSubParagraph1($subParagraph1) {
        $this->subParagraph1 = $subParagraph1;
    }
    
    function GetSubHeading2() {
        return $this->subheading2;
    }
    
    function SetSubHeading2($subheading2) {
        $this->subheading2 = $subheading2;
    }
    
    function GetSubParagraph2() {
        return $this->subParagraph2;
    }
    
    function SetSubParagraph2($subParagraph2) {
        $this->subParagraph2 = $subParagraph2;
    }
    
    function GetEndHeading() {
        return $this->endHeading;
    }
    
    function SetEndHeading($endHeading) {
        $this->endHeading = $endHeading;
    }
    
    function GetEndParagraph() {
        return $this->endParagraph;
    }
    
    function SetEndParagraph($endParagraph) {
        $this->endParagraph = $endParagraph;
    }
    
    function GetReviewedBy() {
        return $this->reviewedBy;
    }
    
    function SetReviewedBy($reviewedBy) {
        $this->reviewedBy = $reviewedBy;
    }

    function printReviews($allReviews) {
        foreach($allReviews as $r){
            
         echo "<form action='index.php' method = 'GET'>"
        . "<a href='index.php?action=readReview&selectedReview=".$r->GetReviewName()."'>"
       . "<img src='reviewImages/". $r->GetReviewImage()."' width='200' height='300'></a>";            
    }
    }

}

?>
