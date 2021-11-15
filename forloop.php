<?php 
    $title = 'For Loop Statement';
    include 'includes/header.php'; 
?>

<h1><?php echo $title ?></h1>

    <?php
        //For Loop

        for($count = 0 ; $count < 10; $count++){
            echo '<p>Hello world</p>';
        }

        for($count = 0 ; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>

<?php require 'includes/footer.php';?>