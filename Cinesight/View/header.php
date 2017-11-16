<!DOCTYPE HTML>
<main>
    <head>
        <title>Cinesight</title>
        <link rel="stylesheet" href="View/main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>

    <section id="home">
        <header>            
            <div id="siteTitle">
                <img src="images/cinesight.png" width ="150" height="75"><h1>CINESIGHT</h1>
                <span id="userName"><?php
                    if (isset($_SESSION['user'])) {
                        echo "<h3>Welcome " . $_SESSION['user'] . "!</h3>";
                    }
                    ?></span>
                <br>
                <h4>Film nerds talking about movies</h4>
            </div>


        </header>
