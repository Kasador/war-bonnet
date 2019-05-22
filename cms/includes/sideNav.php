<?php 
    // if user logs out
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        
        header("location: cms/login.php");
        exit();
    }
?>
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CPanel | WarBonnetRoundUp</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <!-- <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"> -->
  <link href="../styles/reset.css" rel="stylesheet" type="text/css">
  <link href="styles/cms.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <nav class="navCMS">
        <img src="../logos/mainLogo2_v2_sm.png" alt="Idaho's oldest rodeo" class="logoCMS" />
        <div class="loggedIn">
            <span class="loginUserName">Logged-in as, <?php echo $_SESSION['user']; ?></span>
        </div>
        <ul class="flexCMS">
            <li>test</li>
            <li>test</li>
            <li>test</li>
            <li>test</li>
        </ul>
        <div class="logoutContainer">
            <a href="logout.php" title="Logout"><img src="../images/icons/logout_white.png" alt="logout icon" class="logoutCMS" name="logout" /></a>
            <br>
            <a href="../index.php" target="_blank" class="goHome">Open Home Page</a>
        </div>
    </nav>

