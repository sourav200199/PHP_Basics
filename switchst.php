<?php
        $title = "Switch";
        include 'Includes/header.php'
    ?>
    <h2>--------Switch Statements--------</h2>
    <?php
        $grade = 'A';

        switch($grade)
        {
            case 'A':
                echo '<h3 style="color:red">Apple</h3>';
                break;
            case 'B':
                echo '<h3 style="color:blue">Ball</h3>';
                break;
            default:
                echo '<h3 style="color:green">Invalid input</h3>';
        }
    ?>
<?php require 'Includes/footer.php' ?>