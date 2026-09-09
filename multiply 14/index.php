<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplyArray</title>
</head>
<body>
    <?php
        function multiplyArray(array &$numbers, int $multi){
            for ($i=0; $i < count($numbers); $i++) { 
                $numbers[$i] = $numbers[$i] * $multi;
            }
        }

        $numbers = [1, 2, 3, 4];
        multiplyArray($numbers, 5);
        print_r($numbers);
    ?>
</body>
</html>