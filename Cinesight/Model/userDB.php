<?php
 //admin: movieLife
class userDB {

    function saveUser($firstName, $lastName, $userName, $emailAddress, $password, $favMovie, $role) {
        global $db;

        $query = 'Insert into users 
                (userFirstName, userLastName, userAlias, userEmail, userPassword, userFavoriteMovie, userRole) 
                Values 
                (:firstName, :lastName, :alias, :email, :password, :favMovie, :userRole)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':alias', $userName);
        $statement->bindValue(':email', $emailAddress);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':favMovie', $favMovie);
        $statement->bindValue(':userRole', $role);

        $statement->execute();
        $statement->closeCursor();
    }

    function checkLogin($userName, $password) {
        global $db;

        $query = 'Select * From users 
                Where
                userAlias = :userName';

        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);

        $statement->execute();

        $currentUser = $statement->fetchAll();
        $statement->closeCursor();

        if (count($currentUser) === 0) {
            $currentUser = NULL;
            return $currentUser;
        } 
        else if(!password_verify($password, $currentUser[0]['userPassword'])){
            $currentUser = NULL;
            return $currentUser;
        }
        else {
            $foundUser = new users();
            
            $foundUser->SetFirstName($currentUser[0]['userFirstName']);
            $foundUser->SetLastName($currentUser[0]['userLastName']);
            $foundUser->SetUserName($currentUser[0]['userAlias']);
            $foundUser->SetEmailAddress($currentUser[0]['userEmail']);
            $foundUser->SetPassword($currentUser[0]['userPassword']);
            $foundUser->SetFavMovie($currentUser[0]['userFavoriteMovie']);
            $foundUser->SetUserRole($currentUser[0]['userRole']);

            return $foundUser;
        }
    }

}
?>

