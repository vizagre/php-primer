<?php 
    $title = 'Data and Time Manipulation';
    include 'includes/header.php'; 
?>
    <h1><?php echo $title ?></h1>

    <?php
        $datenow = getdate();
        echo "Today's date <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';
    ?>

<?php require 'includes/footer.php';?>