<?php

class Upload {

    function uploadMP3() {
        if (isset($_FILES["audio"])) {

            if ($_FILES["audio"]["type"] === "audio/mp3") {

                $cwd = getcwd();

                $path = $cwd . DIRECTORY_SEPARATOR . "podcasts" . DIRECTORY_SEPARATOR . "audio";

                $tmp_name = $_FILES['audio']['tmp_name'];
                $name = $path . DIRECTORY_SEPARATOR . $_FILES['audio']['name'];

                $success = move_uploaded_file($tmp_name, $name);

                if ($success) {
                    podcast::savePodcastFile($name);
                    return;
                }
            } //end mp3 check
            else if ($_FILES["audio"]["type"] != "audio/mp3") {
                $message = "error";
                return;
            }
        }
    }

    function uploadImage() {
        if ($_FILES["image"]["type"] === "image/jpeg" || $_FILES["image"]["type"] === "image/png") {

            $cwd = getcwd();

            $path = $cwd . DIRECTORY_SEPARATOR . "images";

            $tmp_name = $_FILES["image"]["tmp_name"];
            $name = $path . DIRECTORY_SEPARATOR . $_FILES["image"]["name"];

            $success = move_uploaded_file($tmp_name, $name);

            if ($success) {
                podcast::savePodcast();
                podcastDB::saveImageFile($_FILES["image"]["name"], $_FILES["image"]["type"], $name);
                return;
            } //end jpeg and png check
            else {
                echo "nothing";
            }
        }
    }

}
?>

