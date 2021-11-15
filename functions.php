<?php 
    $title = 'Functions';
    include 'includes/header.php'; 
?>

    <h1><?php echo $title ?></h1>

    <?php

        /* defining a function */
        function writeMessage(){
            echo "You are really a nice person! <br/>";

        }
    ?>

    <?php
        /* calling a function */
        writeMessage();

    ?>

<?php require 'includes/footer.php';?>