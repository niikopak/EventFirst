<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max.ru</title>
</head>
<body>
    <?php
        function getMaxValue(array $numbers) : int {
            $max = $numbers[0];
            for ($i = 1; $i < count($numbers);  $i++) 
                if ($max < $numbers[$i])
                    $max = $numbers[$i];
                return $max;     
        }

        $numbers = [4, 9, 2, 15, 7];
        echo getMaxValue($numbers);
    ?>
</body>
</html>