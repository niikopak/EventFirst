<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max.ru</title>
</head>
<body>
    <?php
        function getMinValue(array $numbers) : int {
            $min = $numbers[0];
            for ($i = 1; $i < count($numbers);  $i++) 
                if ($min > $numbers[$i])
                    $min = $numbers[$i];
                return $min;     
        }

        $numbers = [4, 9, 2, 15, 7];
        echo getMinValue($numbers);
    ?>
</body>
</html>