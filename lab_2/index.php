<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
        $equality = 'x * 7 = 49';
        $elems = explode(" ", $equality);
        $operator = $elems[1];
        $operand = $elems[2];
        $result = $elems[4];
        $x = 0;
        switch ($operator) {
            case '+':
                $x = $result - $operand;
                echo $x; break;
            case '-':
                $x = $result + $operand;
                echo $x; break;
            case '/':
                $x = $result * $operand;
                echo $x; break;
            case '*':
                $x = $result / $operand;
                echo $x; break;
            case '**':
                $x = $result ** (1 / $operand);
                echo $x; break;
            default:
                echo 'Неверно введен оператор';
        };
    ?>
</body>
</html>