<?php

session_start();

require('Model/database.php');
require('Model/podcastDB.php');
require('Model/podcast.php');
require('Model/users.php');
require('Model/userDB.php');
require('Model/upload.php');


$action = filter_input(INPUT_POST, 'action');

if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'initialHome';
    }
}

switch ($action) {

    case 'initialHome':

        $allPodcasts = podcastDB::getPodcasts();

        include('View/home.php');
        break;

    case 'playPodcast':

        $allPodcasts = podcastDB::getPodcasts();

        $chosenPodcast = filter_input(INPUT_GET, 'selectedPodcast');
        $selectedPodcast = podcastDB::findPodcast($chosenPodcast);

        include('View/home.php');
        break;
    case 'addPodcast':
        include('View/addPodcast.php');
        break;
    case "uploadFiles":


         

    case 'savePodcast':
        
        Upload::uploadMP3();
        Upload::uploadImage();
        
        $allPodcasts = podcastDB::getPodcasts();
        include('View/home.php');
        break;

    case 'login':
        $loginError = "";
        include('View/login.php');
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
            include('View/home.php');
            break;
        }

    case 'register':
        include('View/register.php');
        break;

    case 'confirmRegistration':
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $userName = filter_input(INPUT_POST, 'userName');
        $email = filter_input(INPUT_POST, 'emailAddress');
        $password = filter_input(INPUT_POST, 'password');
        $favMovie = filter_input(INPUT_POST, 'favoriteMovie');
        $role = "Standard";

        $newUser = new users();

        $newUser->SetFirstName($firstName);
        $newUser->SetLastName($lastName);
        $newUser->SetUserName($userName);
        $newUser->SetEmailAddress($email);
        $newUser->SetPassword($password);
        $newUser->SetFavMovie($favMovie);
        $newUser->SetUserRole($role);

        userDB::saveUser($newUser->GetFirstName(), $newUser->GetLastName(), $newUser->GetUserName(), $newUser->GetEmailAddress(), $newUser->GetPassword(), $newUser->GetFavMovie(), $newUser->GetUserRole());
        include('View/home.php');
        break;
}
?>