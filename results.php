<?php 
    include('includes/header.php');
    include('includes/navigation.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<main>
    <!-- picture -->
    <div class="pagePics">
        <span class="pageHeaders">Results</span>
    </div>
    <img src="images/rope.png" alt="rope graphic" class="rope" />
    <!-- drop Downs -->
    <section class="mainWrapper">
        <h1 class="contestHeader">Results by Year</h1>
        <div class="mainWrapperDropBtn">
            <div class="dropDownBtnWrapper">
                <h1 class="dropDownHeader">2018 Results</h1>
                <img src="images/icons/open.png" class="openBtn">
            </div>
            <div class="dropDownContent">
                <img src="images/results/1.jpg" class="boardOf">
                <img src="images/results/2.jpg" class="boardOf">
                <img src="images/results/3.jpg" class="boardOf">
                <img src="images/results/4.jpg" class="boardOf">
                <img src="images/results/5.jpg" class="boardOf">
                <img src="images/results/6.jpg" class="boardOf">
                <img src="images/results/7.jpg" class="boardOf">
            </div>
        </div>

        <div class="mainWrapperDropBtn">
            <div class="dropDownBtnWrapper">
                <h1 class="dropDownHeader">2017 Results</h1>
                <img src="images/icons/open.png" class="openBtn">
            </div>
            <div class="dropDownContent">
                <img src="images/results/2017-Winners.png" class="boardOf">
            </div>
        </div>
    </section>
</main>
<?php 
    include('includes/footer.php');
?>