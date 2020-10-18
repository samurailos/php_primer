<?php 
    $title = "String Manipulator";
    include 'includes/header.php' 

?>
    <h1><?php echo $title ?></h1>
    <?php
        //Concatenation of strings
        $phrase1 = "The student who came late";
        $phrase2 = "she was sent on Detention.";
        $name = "llowlyn Smith";
        echo $phrase1 . ", was Jessica Simpson, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //String transformation
        echo 'Uppercase first letter: '. ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: '. ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/> ';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE"). '<br/> ';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
        
        echo 'Get a Substring: ' . substr($name, 3, 5). '<br/>';
        
        echo 'Get position of string: ' . strpos($name,'w').'<br/>';
        //Returns NULL
        //echo 'Get position of string: ' . strpos($combine, 'z'). '<br/>';
        echo 'Find Character "L": ' . strchr($name, 'L'). '<br/>';
        echo 'Find Character "l": ' . strchr($name, 'l'). '<br/>';
        echo 'Find Character "h": ' . strchr($name, 'h'). '<br/>';
        echo 'Find Character "n": ' . strchr($name, 'n'). '<br/>';

        echo 'Find Length of String: ' . strlen($name) .'<br/>';

        echo 'Without Trim: '. "A"." B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A". trim(" B C D") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A". ltrim(" B C D") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A". rtrim(" B C D") . "E" . '<br/>';
       
        echo ' Replace string with another: '. str_replace("Detention", "Suspension", $phrase2) .'<br/>';
        
        
    ?>
<?php require 'includes/footer.php' ?>