<?php
        $title = "While and do while";
        include 'Includes/header.php'
    ?>
    <h2>--------While/Do While--------</h2>
    <?php 
        $grade = 0;
        echo "This is the while loop:";
        while($grade < 5)
        {
            echo "<h4 style='color:green'>This is the $grade th loop</h4>";
            $grade++;
        }
        $grade = 5;
        echo "This is the do-while loop:";
        //Operation done once even if the condition is false
        do
        {
            echo "<h4 style='color:red'>This is the $grade th loop</h4>";
            $grade++;
        }while($grade < 5)
    ?>
<?php require 'Includes/footer.php' ?>