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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="../styles/reset.css" rel="stylesheet" type="text/css">
  <link href="styles/cms.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <nav class="navCMS">
        <img src="../logos/mainLogo2_v2_sm.png" alt="Idaho's oldest rodeo" class="logoCMS" />
        <div class="loggedIn">
            <span class="loginUserName">Logged-in as, <br><br><span style="color: #222; border: 2px solid #222; padding: 3px; background-color: lightgray;"><?php echo $_SESSION['user']; ?></span></span>
        </div>
        <ul class="flex-menu">
            <li id="user"><i class="fas fa-user li-icons"></i> users
                <ul class="side-menu-cms user-menu">
                  <li>add user</li>
                  <li>delete user</li>
                </ul>
            </li>
            <li id="edit"><i class="fas fa-edit li-icons"></i> edit
            <ul class="side-menu-cms edit-menu">
                  <li>events</li>
                  <li>testtest</li>
                </ul>
            </li>
            <li>test</li>
            <li>test</li>
        </ul>
        <div class="logoutContainer">
            <a href="logout.php" title="Logout"><i class="fas fa-sign-out-alt logout-cms"></i></a>
            <br>
            <a href="../index.php" target="_blank" class="goHome">Open Home Page</a>
        </div>
    </nav>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="scripts/cms.js"></script>
