<!-- start session -->
<?php
    include("../database/connection.php");
    session_start();
    include("../includes/sideNav.php");

    // to see if logged-in 
    if(!isset($_SESSION['user'])) {
        header("Location: ../login.php");
    }
 ?>
 
 <main class="main">
    <p> test </p>
</main>
<?php
    include("../includes/footer.php");
 ?>