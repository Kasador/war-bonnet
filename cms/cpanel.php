<!-- start session -->
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
 <main class="main">
    <p> test </p>
    <!-- footer -->
    <footer>
        <div id="footer">
            <span>WarBonnetRoundUp, version 1.0</span>
        </div>
    </footer>
</main>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="scripts/cms.js"></script>
</body>
</html>