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

            <nav>

                <form action='index.php' method="POST">
                    <input type="submit" value="Home">
                    <input type="hidden" name="action" value="initialHome">
                </form>



                <?php if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === "Admin"): ?>
                    <form action='index.php' method ='POST'>
                        <input type='submit' value='Add a podcast'>
                        <input type='hidden' name='action' value='addPodcast'>
                    </form>
                    <form action="index.php" method='POST'> 
                        <input type='submit' value='Write a Review'>
                        <input type='hidden' name='action' value='addReviewInfo'>
                    </form>
                <?php endif; ?>

                <form action ="index.php" method='POST'>
                    <?php
                    if (!isset($_SESSION['userRole'])) {
                        echo "<input type='submit' value='Login'>    
    <input type='hidden' name='action' value='login'>";
                    } else if (isset($_SESSION['userRole'])) {
                        echo "<input type='submit' value='Logout'>    
    <input type='hidden' name='action' value='logout'>";
                    }
                    ?>
                </form>

            </nav>


        </header>
