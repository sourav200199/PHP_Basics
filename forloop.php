<?php
        $title = "For Loops";
        include 'Includes/header.php'
    ?>
    <h2>--------For Loops--------</h2>
    <?php
        for($i = 0; $i<10; $i++)
        {
            if($i % 2 == 0)
                echo "<h3 style='color:red'>This is the $i th loop</h3>";
            else
                echo "<h3 style='color:blue'>This is the $i th loop</h3>";
        }
    ?>
<?php require 'Includes/footer.php' ?>