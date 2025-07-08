<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntex</title>
</head>

<body>
    <?php
    echo "<br>";
    echo " <h1>my first php</h1>"
    ?>
    <?php
    $name = "Rafi";
    echo $name;;
    $number1 = 15;
    $number2 = 10;
    $total = $number1 + $number2;
    echo "<br>";
    echo $total;
    //   constant()
    define("name", "nisat");
    echo "<br>";
    echo name;
    define("NAME", "Ashiqe");
    echo "<br>";
    echo NAME;
    // print 
    $prin = "check print";
    $echo = "check eco";
    echo "<br>";
    $test = $echo;
    echo $test;
    echo "<br>" . $prin . "Nothing New " . $echo;
    echo " <br> $prin Nothing NEw $echo";

    ?>
    <?php
    $num = 345;
    $IsPreaent = false;
    $className = "WDPF";
    echo "<br>";
    $DataType = var_dump($className);
    echo "<br>";
    var_dump($IsPreaent, $className, $num);
    echo "<br>";
    echo "<br>";
    echo "<br>";


    ?>
    <?php
    echo "<h3> Case Style </h3>";
    $name = "islamic development bank";
    $Name = "Islamic Development Bank";

    echo strtoupper($name);  // ISLAMIC DEVELOPMENT BANK
    echo "<br>";
    echo strtolower($name);  // islamic development bank
    echo "<br>";
    echo ucfirst($name);     // Islamic development bank
    echo "<br>";
    echo ucwords($name);     // Islamic Development Bank
    echo "<br>";
    echo lcfirst($Name);     // islamic Development Bank
    echo "<br>";
    $text = "  hello  ";
    echo trim($text);   // "hello";



    ?>
    <?php
    echo " <h3> String Replace & Search Functions:</h3>";
    echo "<br>";
    $text = "  hello  ";
    echo trim($text);   // "hello"
    $originalText = "Hello Nisat, Welcome to the PHP World!";

    // 1. str_replace() - Case-sensitive
    $replace1 = str_replace("PHP", "JavaScript", $originalText);

    // 2. str_ireplace() - Case-insensitive
    $replace2 = str_ireplace("hello", "Hi", $originalText);

    // 3. strpos() - Case-sensitive position check
    $pos1 = strpos($originalText, "Nisat");

    // 4. stripos() - Case-insensitive position check
    $pos2 = stripos($originalText, "php");

    // 5. substr_replace() - Replace a part by position
    $maskedText = substr_replace($originalText, "*****", 6, 5); // "Nisat" replace

    // 6. substr() -
    $partial = substr($originalText, 7, 5); // Nisat

    // Output everything
    echo "<h3>Original Text:</h3>" . $originalText;
    echo "<h3>1. str_replace:</h3>" . $replace1;
    echo "<h3>2. str_ireplace:</h3>" . $replace2;
    echo "<h3>3. strpos ('Nisat'):</h3> Position: " . $pos1;
    echo "<h3>4. stripos ('php'):</h3> Position: " . $pos2;
    echo "<h3>5. substr_replace (masking 'Nisat'):</h3>" . $maskedText;
    echo "<h3>6. substr (get 'Nisat'):</h3>" . $partial;





    ?>
<?php
echo "<div class=\"output everything\">
    <p>
        Step Output<br>
        str_replace() Hello Nisat, Welcome to the JavaScript World!<br>
        str_ireplace() Hi Nisat, Welcome to the PHP World!<br>
        strpos(\"Nisat\") 6<br>
        stripos(\"php\") 29<br>
        substr_replace() Hello *****, Welcome to the PHP World!<br>
        substr() Nisat
    </p>
</div>";
?>



    <?php
    echo "<br>";
    echo " <h3>  Length and Substring::</h3>";
    echo strlen("Nisat");       // 5
    echo substr("Nisat", 0, 3); // Nis

    ?>



</body>

</html>