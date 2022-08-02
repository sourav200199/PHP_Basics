<?php
        $title = "Strings";
        include 'Includes/header.php'
    ?>
    <h2>--------Strings--------</h2>
    <?php
        $phr1 = "PHP - Strings.";
        $phr2 = "hello everyone!";
        $phr3 = "    hi there  ";
        echo $phr1." ".$phr2; //concatenation
        echo "</br>";

        //String transformations
        echo "Substring: ".$phr1[2]; //char at i-th pos.
        echo "</br>";
        echo "Uppercase first letter: ".ucfirst($phr2)."</br>";
        echo "Uppercase words: ".ucwords($phr2)."</br>"; //Uppercase only first letter of the words
        echo "Uppercase: ".strtoupper($phr2)."</br>"; //total uppercase
        echo "Repeat strings: ".str_repeat($phr1, 5)."</br>"; //string repeat
        echo "Word Count of - ".$phr2." : ".str_word_count($phr2)."</br>"; //word count
        echo "Substring of - ".$phr2." : ".substr($phr2, 2)."</br>"; //substring
        echo "Substring of - ".$phr2." : ".substr($phr2, 2, 7)."</br>"; //substring
        echo "Substring of - ".$phr2." : ".substr($phr2, -5)."</br>"; //substring
        echo "Position of everyone- ".strpos($phr2, "everyone")."</br>"; //starting position of a word
        echo "Length: ".strlen($phr2)."</br>"; //length of the string
        echo "</br>";
        echo "$phr3"."</br>"; 
        echo "With trim: ".trim($phr3)."</br>"; //length of the string
    ?>
<?php require 'Includes/footer.php' ?>