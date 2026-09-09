<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>finder primarykey</title>
</head>
<body>
    <?php
        //Функция по нахождению универсальных значений (без повторений)
        function finderPrimaryNum(array $numbers) : array {
            $primaryNums = [];
            for ($i=0; $i < count($numbers); $i++) {
                $found = false;
                for ($j=0; $j < count($primaryNums); $j++) { 
                    if ($numbers[$i] == $primaryNums[$j]) {
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $primaryNums[] = $numbers[$i];
                }
            }
            return $primaryNums;
        }

        $numbers = [1, 2, 2, 3, 1, 4, 3];
        print_r(finderPrimaryNum($numbers));
    ?>
</body>
</html>