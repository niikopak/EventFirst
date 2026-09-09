<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plus</title>
</head>
<body>
    <?php
        //Функция по поиску положительных значений
        function countPositive(array $numbers) : int {
            $positive = 0;
            for ($i=0; $i < count($numbers); $i++) { 
                if ($numbers[$i] > 0) {
                    $positive++;
                }
            }
            return $positive;
        }
        
        $numbers = [-2, 5, 0, 7, -1, 3];
        echo countPositive($numbers);
    ?>
</body>
</html>