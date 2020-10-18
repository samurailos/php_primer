<?php 
    $title = "Index";
    include 'includes/header.php' 

?>

    <!-- Basci HTML -->
    <h1><?php echo $title ?></h1>
    <br/>
    <?php
        //Printing to HTML using echo
        echo 'Hello Im PHP';
        //Echoing HTML Tags
        echo '<br/>';
        echo 'Second line';
        echo "<br/>";
        //declare variable, variables need a '$'
        $name = 'Llowlyn Smith';
        $age = '32';
        //echo variable
        echo $name;
        echo '<h1>My name is: '. $name.'</h1>';
        echo '<h1>My name is: '. $age.'</h1>';
        //Echo using double quotations and interpolation
        echo "<h1>My Name is: $name</h1>";
    ?>
    
    <button type="button" class="btn btn-danger">CLICK ME!!</button>
    <button type="button" class="btn btn-primary">CLICK ME!!</button>
    <button type="button" class="btn btn-success">CLICK ME!!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn  btn-warning">Heroku.com</a>
    <?php
        require 'includes/footer.php' 
     ?>