<?php
require('Model/database.php');
require('Model/reviews.php');
require('Model/reviewsDB.php');
require('Model/podcastDB.php');
require('Model/podcast.php');
require('Model/users.php');
require('Model/userDB.php');
require('Model/upload.php');
require('Model/Validation.php');

session_start();

$action = filter_input(INPUT_POST, 'action');

if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'initialHome';
    }
}

switch ($action) {

    case 'initialHome':
        include('View/home.php');
        break;
    
    case 'allPodcasts':
        $allPodcasts = podcastDB::getPodcasts();
        include('View/allPodcasts.php');
        break;
    
    case 'allReviews':
        
        $allReviews = reviewsDB::getReviews();
        include('View/allReviews.php');
        break;
    
    case 'readReview' :
        $chosenReview = filter_input(INPUT_GET, 'selectedReview');
        $selectedReview = reviewsDB::findReview($chosenReview);
        include('View/readReview.php');
        break;
        
    case 'playPodcast':
        $allPodcasts = podcastDB::getPodcasts();
        $chosenPodcast = filter_input(INPUT_GET, 'selectedPodcast');
        $selectedPodcast = podcastDB::findPodcast($chosenPodcast);
        include('View/allPodcasts.php');
        break;
    
    case 'addPodcast':
        include('View/addPodcast.php');
        break;
    
    case 'savePodcast':
        Upload::uploadMP3();
        Upload::uploadImage();
        include('View/uploadConfirmation.php');
        break;
    
    case 'addReviewInfo':
        $errorMessage = "";
        include('View/addReviewInfo.php');
        break;
    
    case 'addReviewContent':
        $newReview = Validation::validateReviewInfo();
        $_SESSION['newReview'] = $newReview;
        
        include('View/checkInfo.php');
        break;
    
    case 'enterReviewContent':
        include("View/addReviewContent.php");
        break;
    
    case 'finishReview':
        $currentReview = $_SESSION['newReview'];
        Validation::validateReviewContent($currentReview);
        
        include('View/uploadConfirmation.php');
        break;

    case 'login':
        $loginError = "";
        include('View/login.php');
        break;
    
    case 'logout':
        $_SESSION['user'] = NULL;
        $_SESSION["userRole"] = NULL;
        $allPodcasts = podcastDB::getPodcasts();
        include('View/allPodcasts.php');
        break;

    case 'checkLogin':
        $userName = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $foundUser = userDB:: checkLogin($userName, $password);

        if ($foundUser === NULL) {
            $loginError = "User Not Found";
            include('View/login.php');
            break;
        } else {
            $_SESSION['user'] = $foundUser->GetFirstName();
            $_SESSION['userRole'] = $foundUser->GetUserRole();
            $allPodcasts = podcastDB::getPodcasts();
        include('View/allPodcasts.php');
            break;
        }

    case 'register':
        $errorMessage = "";
        include('View/register.php');
        break;

    case 'confirmRegistration':
        Validation::validateRegistration();
        break;
}
?>