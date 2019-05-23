<!-- connect to database -->
<?php 
    include('../database/connection.php');
    if (isset($_POST['insertImg'])) {
        $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $query = "INSERT INTO eventimg_tbl(name) VALUES ('$file')";

        if (mysqli_query($conn, $query)) {
            echo '<script>alert("Image inserted into database.");</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Testing Page</title>
</head>
<body>
    <h1 style="color: lightgray;">Testing Page</h1>
    <hr style="color: lightgray;">
    <div id="img-container">
        <h2>How to Insert & Display Images using MySql & PHP</h2>
        <br>
        <!-- insert image into database -->
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
            <br>
            <br>
            <input type="submit" name="insertImg" value="Insert" id="img-insert">
        </form>
        <br>
        <!-- insert image into page -->
        <h1>Images From Database</h1>
        <div style="border: 2px solid #222; padding: 15px; width: 350px;">
            <h3>The image desc</h3>
            <!-- the image that is needed into page -->
            <?php 
                $query = "SELECT * FROM eventimg_tbl ORDER BY imgId DESC";
                $result = mysqli_query($conn, $query);

                if($result === FALSE) { 
                    die(mysql_error());
                    alert('An error occurred. Please clear cache, refresh page, and try again...');
                }

                while($row = mysqli_fetch_array($result)) {
                    echo '
                        <img src="data:image/jpeg;base64, '.base64_encode($row['name']).'"><br><br>
                    ';
                }
            ?>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <!-- script for error handling on image -->
    <script>
        $(document).ready(function() {
            $('#img-insert').click(function(){
                let imageName = $('#image').val();
                if (imageName == '') {
                    alert('Please select an image.');
                    return false;
                } else {
                    let extension = $('#image').val().split('.').pop().toLowerCase();
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert('Invalid image file.');
                        $('#image').val('');
                        return false;
                    }
                }
            });
        });
    </script>
</body>
</html>