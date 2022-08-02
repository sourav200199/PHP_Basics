<?php
        $title = "Date and Time";
        include 'Includes/header.php'
    ?>
    <h2>--------Date and Time--------</h2>
    <?php
        $datenow = getdate();  //Date function
        echo "Today's date: ";
        echo $datenow['mday'];//day of the month
        echo ".".$datenow['mon'];//month
        echo ".".$datenow['year']."</br>";//year
        
        print date("m/d/y G.i:s</br>", time()).'</br>';
        print "Today is ";
        print date("j F Y, \a\\t g.i a", time());
    ?>
<?php require 'Includes/footer.php' ?>