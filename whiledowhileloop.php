<?php 
    $title = 'While-Loop';
    include 'includes/header.php'; 
?>

    <h1><?php echo $title ?></h1>
    <?php
        $grade = 0;
        while($grade < 10){
            echo '<p>I am less then 10</p>';
            $grade++;
        }
        echo 'Exit loop!'
    ?>
    <br/>
    <hr>
    <h1>DO-WHILE LOOP</h1>
    <?php
        $grade = 0;
        do{
            echo '<p>I am DO WHILE LOOP</p>';  
            $grade++;
        }while($grade < 10);     
        echo 'Exit loop!';                                                                                                                                                                                                                                                                                                           
    ?>

<?php require 'includes/footer.php';?>

