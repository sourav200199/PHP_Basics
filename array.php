<?php
        $title = "Arrays";
        include 'Includes/header.php'
    ?>
    <h2>--------Arrays--------</h2>
    <?php
        $num = array(1, 2.2, "Sourav", 'A');

        echo $num[2];
        $size = count($num); //find the length of the array
        echo "<p>Array count: $size</p>";

        echo "The array is:";
        for($i = 0; $i < $size; $i++)
            echo "<p>$num[$i]</p>";
    ?>
<?php require 'Includes/footer.php' ?>