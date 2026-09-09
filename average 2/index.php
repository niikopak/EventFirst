<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>average</title>
</head>
<body>
    <?php
        //Функция суммы
        function getSum(array $numbers) : int {
            $sum = 0;
            for ($i=0; $i < count($numbers); $i++) { 
                $sum+= $numbers[$i];
            }
            return $sum;
        }

        //Функция сред ариф
        function getAverage(array $numbers) : int {
            return getSum($numbers) / count($numbers);
        }

        $numbers = [10, 20, 30, 40];
        echo getAverage($numbers);
    ?>
</body>
</html>