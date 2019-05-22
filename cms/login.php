<!-- start session -->
<?php
    include("../database/connection.php");
    session_start();
    $incorrect = '';
 ?>
<?php
// Checking whether the session is already there or not
// if true, redirect them to cms page
if (isset($_SESSION['user'])) {
    header("Location: cpanel.php"); 
 }

 // it checks whether the user clicked login button or not
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    
    // TO AVOID SQL INJECTION USE PREPARED STATEMENTS

    // $query = mysqli_query($conn, "SELECT * FROM userinfo_tbl
    //     WHERE userName = '$username' 
    //     AND pass = '$password';") 
    //     or die(mysqli_connect_error());

    // $row = mysqli_fetch_array($query);
    // $user = $row['userName'];
    // $pass = $row['pass'];

    // prepare a statement
    $stmt = $conn->prepare('SELECT * FROM userinfo_tbl
        WHERE userName = ?
        AND pass = ?');
    // bind parameters to post data/user input
    $stmt->bind_param('ss', $username, $password); // 's' specifies the variable type => 'string'

    $stmt->execute();
    // get results
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
        $user = $row['userName'];
        $pass = $row['pass'];
    // compare values
    if ($username == $user && $password == $pass) {
            $_SESSION['user'] = $row['userName'];
            echo '<script type="text/javascript"> window.open("cpanel.php","_self");</script>';
        } else { 
            $incorrect = "Username or password is incorrect. Please try again.";
        }
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
    <title>Home | WarBonnetRoundUp</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <!-- <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"> -->
  <link href="styles/reset.css" rel="stylesheet" type="text/css">
  <link href="styles/login.css" rel="stylesheet" type="text/css">
  </head>
  <body>

<main>
    <form action="" method="POST" id="loginBox">
        <img src="../logos/mainLogo2_v2_sm.png" alt="Idaho's oldest rodeo" id="logoLogin" />
        <div id="flexFields">
            <label>Username</label>
            <input type="text" class="inputLogin" name="user" autocomplete="off">
            <label>Password</label>
            <input type="password" class="inputLogin" name="pass">
        </div>
        <span style="color: yellow; padding: 5px; position: absolute; right: 150px; left: 150px; width: 100%;"><?php echo $incorrect ?></span>
        <button id="loginBtn" name="login"><span>Login</span></button>
        <a href="../index.php" target="_blank" id="goHome">Open Home Page</a>
    </form>
</main>

<!-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="scripts/main.js"></script> -->
  </body>
</html>