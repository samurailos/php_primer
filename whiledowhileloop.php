<?php 
    $title = "While/Do While Loops";
    include 'includes/header.php' 

?>

    <h1><?php echo $title ?></h1>
    <?php
        $grade = 0;
       
                //infinite loop
                //while($grade <10){
                //echo '<p>I AM LESS THAN 10!</p>';   
                   
                // }
                while($grade < 10)
                     {        
                         echo '<p>I AM LESS THAN 10!</p>';
                         $grade++;
                     } 
                echo 'EXIT LOOP';       
   
   ?>

    <h1>DO-While Loop</h1>
    <?php
        //Post Condition loop
        $grade=0;
        do
        {
            echo '<p>I AM A DO WHILE LOOP</p>';
            $grade++;
        }while($grade <10);
        echo "EXIT LOOP!";

        

    ?>
<?php require 'includes/footer.php' ?>