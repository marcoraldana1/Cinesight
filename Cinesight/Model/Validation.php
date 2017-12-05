<?php

class Validation {

    function validateReviewContent($currentReview) {
        $mainHeading = filter_input(INPUT_POST, 'mainHeading');
        $mainParagraph = filter_input(INPUT_POST, 'mainParagraph');
        $subHeading1 = filter_input(INPUT_POST, 'subHeading1');
        $subParagraph1 = filter_input(INPUT_POST, 'subParagraph1');
        $subHeading2 = filter_input(INPUT_POST, 'subHeading2');
        $subParagraph2 = filter_input(INPUT_POST, 'subParagraph2');
        $endHeading = filter_input(INPUT_POST, 'endHeading');
        $endParagraph = filter_INPUT(INPUT_POST, 'endParagraph');

        if ($mainHeading === "" || $mainHeading === NULL) {
            $errorMessage = "Main Heading is required";
            include('View/addReviewContent.php');
        } else if ($mainParagraph === "" || $mainParagraph === NULL) {
            $errorMessage = "Main Paragraph is required";
            include('View/addReviewContent.php');
        } else if($subHeading1 === "" || $subHeading1 === NULL) {
            $errorMessage = "Sub Heading 1 is required";
            include('View/addReviewContent.php');
        } else if($subParagraph1 === "" || $subParagraph1 === NULL) {
            $errorMessage = "Sub Paragraph 1 is required";
            include('View/addReviewContent.php');
        } else if($subHeading2 === "" || $subHeading2 === NULL) {
            $errorMessage = "Sub Heading 2is required";
            include('View/addReviewContent.php');
        } else if($subParagraph2 === "" || $subParagraph2 === NULL)  {
            $errorMessage = "Sub Paragraph 2 is required";
            include('View/addReviewContent.php');
        } else if($endHeading === "" || $endHeading === NULL) {
            $errorMessage = "End Heading is required";
            include('View/addReviewContent.php');
        } else if($endParagraph === "" || $endParagraph === NULL) {
            $errorMessage = "End Paragraph is required";
            include('View/addReviewContent.php');
        }
        
        else {
            $currentReview->SetMainHeading($mainHeading);
            $currentReview->SetMainParagaph($mainParagraph);
            $currentReview->SetSubHeading1($subHeading1);
            $currentReview->SetSubParagraph1($subParagraph1);
            $currentReview->SetSubHeading2($subHeading2);
            $currentReview->SetSubParagraph2($subParagraph2);
            $currentReview->SetEndHeading($endHeading);
            $currentReview->SetEndParagraph($endParagraph);
              
            reviewsDB::saveReviewContent($currentReview->GetMainHeading(), $currentReview->GetMainParagraph(),
                    $currentReview->GetSubHeading1(), $currentReview->GetSubParagraph1(), 
                    $currentReview->GetSubHeading2(), $currentReview->GetSubParagraph2(), 
                    $currentReview->GetEndHeading(), $currentReview->GetEndParagraph());
            
            return;
        }
    }

    function validateReviewInfo() {
        $reviewName = filter_input(INPUT_POST, 'reviewName');
        $reviewedBy = filter_input(INPUT_POST, 'reviewedBy');
        $runtime = filter_input(INPUT_POST, 'runtimeHours');
        $starring = filter_input(INPUT_POST, 'starring');

        if ($reviewName === "" || $reviewName === NULL) {
            $errorMessage = "Review Name is required";
            include('View/addReviewInfo.php');
        } else if ($reviewedBy === "" || $reviewedBy === NULL) {
            $errorMessage = "Reviewed By is required";
            include('View/addReviewInfo.php');
        } else if ($runtime === "" || $runtime === NULL) {
            $errorMessage = "Runtime is required";
            include('View/addReviewInfo.php');
        } else if ($starring === "" || $starring === NULL) {
            $errorMessage = "'Starring is required";
            include('View/addReviewInfo.php');
        } else {
            $newReview = new reviews();

            $newReview->SetReviewName($reviewName);
            $newReview->SetReviewedBy($reviewedBy);
            $newReview->SetRuntimeHours($runtime);
            $newReview->SetStarring($starring);
            $newReview->SetReviewImage($_FILES['reviewImage']['name']);

            Upload::uploadReviewImage();
            
                        reviewsDB::saveReviewInfo($newReview->GetReviewName(), $newReview->GetRuntimeHours(), 
                    $newReview->GetReviewedBy(), $newReview->GetStarring(), 
                    $newReview->GetReviewImage());
            return $newReview;
        }
    }

    function validateRegistration() {
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $userName = filter_input(INPUT_POST, 'userName');
        $email = filter_input(INPUT_POST, 'emailAddress');
        $password = filter_input(INPUT_POST, 'password');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
        $favMovie = filter_input(INPUT_POST, 'favoriteMovie');
        $role = "Standard";

        if ($firstName === "" || $firstName === NULL) {
            $success = false;
            $errorMessage = "First Name is required";
            include('View/register.php');
            return;
        } else if ($lastName === "" || $lastName === NULL) {
            $success = false;
            $errorMessage = "Last Name is Required";
            include('View/register.php');
            return;
        } else if ($userName === "" || $userName === NULL) {
            $success = false;
            $errorMessage = "User Name Required";
            include('View/register.php');
            return;
        } else if ($email === "" || $email === NULL) {
            $success = false;
            $errorMessage = "Email Address is Required";
            include('View/register.php');
            return;
        } else if ($password === "" || $password === NULL) {
            $success = false;
            $errorMessage = "Password is Required";
            include('View/register.php');
            return;
        } else if ($favMovie === "" || $favMovie === NULL) {
            $success = false;
            $errorMessage = "Favorite Movie is Required";
            include('View/register.php');
            return;
        } else if ($password !== $confirmPassword) {
            $success = false;
            $errorMessage = "Passwords do not match";
            include('View/register.php');
            return;
        } else {
            $newUser = new users();

            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            $newUser->SetFirstName($firstName);
            $newUser->SetLastName($lastName);
            $newUser->SetUserName($userName);
            $newUser->SetEmailAddress($email);
            $newUser->SetPassword($hashPassword);
            $newUser->SetFavMovie($favMovie);
            $newUser->SetUserRole($role);

            userDB::saveUser($newUser->GetFirstName(), $newUser->GetLastName(), $newUser->GetUserName(), $newUser->GetEmailAddress(), $newUser->GetPassword(), $newUser->GetFavMovie(), $newUser->GetUserRole());
            $allPodcasts = podcastDB::getPodcasts();
            include('View/allPodcasts.php');
            return;
        }
    }

}

?>
