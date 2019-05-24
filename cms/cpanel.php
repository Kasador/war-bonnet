<?php
    include("../database/connection.php");
    session_start();
    include("includes/sideNav.php");

    // to see if logged-in 
    if(!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
 ?>
<!-- page tag -->
<span class="page-tag">Dashboard</span>
<!-- main content -->
<main class="main">
    <section class="main-container">
        <h1 id="cms-header">test</h1>
    </section>
</main>
 <?php
    include("includes/footer.php");
 ?>