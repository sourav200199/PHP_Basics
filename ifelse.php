<?php
        $title = "Functions";
        include 'Includes/header.php'
    ?>
    <?php
        echo '<h3>--------If Statements--------</h3>';
        $grade = 70;

        if ($grade >= 50 && $grade < 60)
        {
            echo '<h4 style="color:green">You have passed</h4>';
        }
        elseif($grade >=60)
        {
            echo '<h4 style="color:blue">You have nailed!</h4>';
        }
        else {
            echo '<h4 style="color:red">You have failed!</h4>';
        }
    ?>
<?php require 'Includes/footer.php' ?>