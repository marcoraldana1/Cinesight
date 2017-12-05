<?php

class reviewsDB {

    function getReviews() {
        global $db;

        $query = 'Select reviewName, reviewedBy, runtimeHours, starring, imageName, mainHeading, mainParagraph, subheading1, subParagraph1, subheading2, subParagraph2, endHeading, endParagraph
                From reviews_info JOIN reviews_content ON
                reviews_info.reviewID = reviews_content.reviewID';

        $allReviews = array();

        $statement = $db->prepare($query);
        $statement->execute();

        $reviews = $statement->fetchall();

        foreach ($reviews as $r) {
            $currentReview = new reviews();

            $currentReview->SetReviewName($r['reviewName']);
            $currentReview->SetReviewedBy($r['reviewedBy']);
            $currentReview->SetRuntimeHours($r['runtimeHours']);
            $currentReview->SetStarring($r['starring']);
            $currentReview->SetReviewImage($r['imageName']);

            $currentReview->SetMainHeading($r['mainHeading']);
            $currentReview->SetMainParagaph($r['mainParagraph']);
            $currentReview->SetSubHeading1($r['subheading1']);
            $currentReview->SetSubParagraph1($r['subParagraph1']);
            $currentReview->SetSubHeading2($r['subheading2']);
            $currentReview->SetSubParagraph2($r['subParagraph2']);
            $currentReview->SetEndHeading($r['endHeading']);
            $currentReview->SetEndParagraph($r['endParagraph']);

            array_push($allReviews, $currentReview);
        }

        $statement->closeCursor();

        return $allReviews;
    }

    function findReview($reviewName) {
        global $db;

        $query = 'Select reviewName, reviewedBy, runtimeHours, starring, imageName, mainHeading, mainParagraph, subheading1, subParagraph1, subheading2, subParagraph2, endHeading, endParagraph
                From reviews_info JOIN reviews_content ON
                reviews_info.reviewID = reviews_content.reviewID
                Where reviewName = :reviewName';

        $r = array();

        $statement = $db->prepare($query);
        $statement->bindValue(':reviewName', $reviewName);
        $statement->execute();

        $r = $statement->fetchAll();
        $currentReview = new reviews();
        
        $currentReview->SetReviewName($r[0]['reviewName']);
        $currentReview->SetReviewedBy($r[0]['reviewedBy']);
        $currentReview->SetRuntimeHours($r[0]['runtimeHours']);
        $currentReview->SetStarring($r[0]['starring']);
        $currentReview->SetReviewImage($r[0]['imageName']);

        $currentReview->SetMainHeading($r[0]['mainHeading']);
        $currentReview->SetMainParagaph($r[0]['mainParagraph']);
        $currentReview->SetSubHeading1($r[0]['subheading1']);
        $currentReview->SetSubParagraph1($r[0]['subParagraph1']);
        $currentReview->SetSubHeading2($r[0]['subheading2']);
        $currentReview->SetSubParagraph2($r[0]['subParagraph2']);
        $currentReview->SetEndHeading($r[0]['endHeading']);
        $currentReview->SetEndParagraph($r[0]['endParagraph']);

        $statement->closeCursor();

        return $currentReview;
    }

    function saveImageFile($fileName, $fileType, $location) {
        global $db;

        $query = 'Insert Into images_reviews
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

    function saveReviewInfo($reviewName, $runtimeHours, $reviewedBy, $starring, $imageName) {
        global $db;

        $query = 'Insert Into reviews_info 
                (reviewName, runtimeHours, reviewedBy, starring, imageName)
                Values
                (:reviewName, :runtimeHours, :reviewedBy, :starring, :imageName)';

        $statement = $db->prepare($query);

        $statement->bindValue(':reviewName', $reviewName);
        $statement->bindValue(':runtimeHours', $runtimeHours);
        $statement->bindValue(':reviewedBy', $reviewedBy);
        $statement->bindValue(':starring', $starring);
        $statement->bindValue(':imageName', $imageName);

        $statement->execute();
        $statement->closeCursor();
    }

    function saveReviewContent($mainHeading, $mainParagraph, $subHeading1, $subParagraph1, $subHeading2, $subParagraph2, $endHeading, $endParagraph) {
        global $db;

        $query = 'Insert Into reviews_content
                (mainHeading, mainParagraph, subheading1, subParagraph1, subheading2, subParagraph2, endheading, endParagraph)
                Values
                (:mainHeading, :mainParagraph, :subHeading1, :subParagraph1, :subHeading2, :subParagraph2, :endHeading, :endParagraph)';

        $statement = $db->prepare($query);

        $statement->bindValue(':mainHeading', $mainHeading);
        $statement->bindValue(':mainParagraph', $mainParagraph);
        $statement->bindValue(':subHeading1', $subHeading1);
        $statement->bindValue(':subParagraph1', $subParagraph1);
        $statement->bindValue(':subHeading2', $subHeading2);
        $statement->bindValue(':subParagraph2', $subParagraph2);
        $statement->bindValue(':endHeading', $endHeading);
        $statement->bindValue(':endParagraph', $endParagraph);

        $statement->execute();
        $statement->closeCursor();
    }

}
?>

