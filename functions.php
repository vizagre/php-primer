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

        /* calling a function */
        writeMessage();
    ?>

    <?php

        /* defining another function */
        function sumValues($num1, $num2){
            $soma = $num1 + $num2;
            echo "A soma dos números $num1 e $num2 é: $soma <br/>";
        }

        /* calling the sumValue function */

        $num1 = 10;
        $num2 = 50;
        sumValues($num1, $num2);
    ?>

<?php require 'includes/footer.php';?>