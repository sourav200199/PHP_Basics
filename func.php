<?php
        $title = "Functions";
        include 'Includes/header.php'
    ?>
    <h2>--------Functions--------</h2>
    <?php
        //----Call by value----
        function write_message($name)
        {
            echo "Hi there ".$name."!"."</br>";
        }
        write_message('Sourav');
        
        //----Call by reference----
        function change_num(&$num)
        {
            $num += 10;
        }
        $num = 25;
        echo "Num before changing: ".$num."</br>";
        change_num($num);
        echo "Num after changing: ".$num."</br>";

        //----Returning a value----
        function return_sum($n1, $n2)
        {
            $sum = $n1 + $n2;
            return $sum;
        }

        echo "Function to return value: ".return_sum(15, 15);
    ?>
<?php require 'Includes/footer.php' ?>