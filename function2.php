<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>Functions</h1>
    <h2>Basic</h2>
    
    <?php
        function basic(){
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");
        }
        basic();
        basic();
    ?>

    <h2>parameter $amp; argument</h2>
    <?php
        function sum($a, $b) {
            return $a+$b;
        }
        echo "sum of 2, 4: ".sum(2, 4)."<br>";
        echo "sum of 5, 7: ".sum(5, 7)."<br>";

        file_put_contents("resultofsum/result.txt", sum(4, 6));
    ?>
</body>
</html>