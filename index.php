<?php
require "includes/header.php";
?>
<body class="bg-dark">
<main>
    <!--
        This is how index should look when the user is not logged in.
        They have the option to log in, or just use the character generator
    -->
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <img src="img/gyro.png" class="" style="max-width: 64px" alt="...">
            <h1 class="display-5 fw-bold text-white">StoryKeeper</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Keep track of your RimWorld colonies. Write stories and visualize how your colony
                    has performed over the course of the game.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a type="button" href="loginPage.php" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Login</a>
                    <a type="button" href="charGenerator.php" class="btn btn-outline-light btn-lg px-4">Generator</a>
                </div>
            </div>
        </div>
    </div>

    <!--
        Once they are logged in, this place should look different. Should be
        like a central hub where they can access all sorts of different pages.
        Should have an album style main area with their different colonies, they
        can then click on a colony which will take them to a colony screen where
        they can do all kinds of stuff with that specific colony.

        The main page here should have links to a logout page, a profile page with
        some collected stats, and maybe some way to customize the look and feel of
        the site when they are logged in? Potentially some kind of light/dark mode,
        or the option to choose different colour palettes.
    -->
</main>
</body>
<?php
require "includes/footer.php";
?>
