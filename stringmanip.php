<?php 
    $title = 'String Manipulations';
    include 'includes/header.php'; 
?>

    <h1><?php echo $title ?></h1>
    <?php
        //Concatenation of strings
        $phrase1 = "Student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "leonardo vizagre";
        echo $phrase1 . ' ' . $phrase2;
        echo '<br/>';
        echo '<hr/>';

        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
        echo 'Uppercase: ' . strtoupper($name). '<br/>';
        echo 'Lowercase: ' . strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get a substring: ' . substr($name,5,10) . '<br/>';
        echo '<hr/>';

        echo 'Find character "v": ' . strchr($name, 'v') . '<br/>';
    ?>

<?php require 'includes/footer.php';?>