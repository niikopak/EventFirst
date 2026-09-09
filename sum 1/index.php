<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum</title>
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

        $numbers = [2, 5, 7, 3];
        echo getSum($numbers);
    ?>
</body>
</html>