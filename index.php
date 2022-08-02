    <?php
        $title = "Index";
        include 'Includes/header.php'
    ?>
        <?php
        //Printing to HTML using PHP echo
        echo 'Hello PHP!';
        //echo '</br>'; //using HTML tags in echo
        //echo 'Hello PHP!';

        $name = 'Sourav';
        $age = 20;
        echo '</br>';
        echo $name;
        echo '</br>'; 
        echo '<h3>My name is: '.$name.'</h3>';//Concatenation
        echo '<h3>My age is: '.$age.'</h3>';//Concatenation
        //another method
        echo "<h3>My name is: $name</h3>"
        ?>
        <?php 
        require 'Includes/footer.php' 
        ?>