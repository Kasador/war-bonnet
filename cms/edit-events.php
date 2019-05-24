<?php
    include("../database/connection.php");
    session_start();
    include("includes/sideNav.php");

    // to see if logged-in 
    if(!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
    if (isset($_POST['insertEvent'])) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $desc = mysqli_real_escape_string($conn, $_POST['description']);

        $query = "INSERT INTO events_tbl(title, imgName, description) VALUES ('$title', '$file', '$desc')";
        if (mysqli_query($conn, $query)) {
            echo '<script>alert("Event has been sucessfully created!");</script>';
        }
    }
?>
<!-- page tag -->
<span class="page-tag">Events</span>
<!-- main content -->
<main class="main">
    <section class="main-container">
    <div id="img-container">
        <!-- insert image into database -->
        <form method="POST" enctype="multipart/form-data" class="events-form">
            <span class="edit-headers">Title of Event:</span>
            <input type="text" name="title" id="events-title">
            <span class="edit-headers">Choose an Image:</span>
            <input type="file" name="image" id="image">
            <span class="edit-headers">Description of Event:</span>
            <textarea name="description" id="events-desc"></textarea>
            <button class="submit-btns" name="insertEvent" id="event-submit"><span>Submit</span></button>
        </form>
        <!-- insert image into page -->
        <div style="border: 2px solid #222; padding: 15px; width: 350px;">
        <h1>Images From Database</h1>
            <!-- the image that is needed into page -->
            <?php 
                $query = "SELECT * FROM events_tbl ORDER BY eventId DESC";
                $result = mysqli_query($conn, $query);

                if($result === FALSE) { 
                    die(mysql_error());
                    alert('An error occurred. Please clear cache, refresh page, and try again...');
                }

                while($row = mysqli_fetch_array($result)) {
                    echo '
                        <h1>'. $row['title'].'</h1><br>
                        <img src="data:image/jpeg;base64, '.base64_encode($row['imgName']).'" style="width: 300px; height: 300px;"><br><br>
                        <p>'. $row['description'].'</p>
                    ';
                }
            ?>
        </div>
    </div>
    </section>
</main>
<!-- script for error handling on image -->
<script>
    $(document).ready(function() {
        $('#event-submit').click(function(){
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
<?php 
    include("includes/footer.php");
?>

