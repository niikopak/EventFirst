<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        //Функция, которая возвращает только числа больше заданного значения
        function filterGreaterThan(array $numbers, int $limit) : array {
            $result = [];
            for ($i=0; $i < count($numbers); $i++) { 
                if ($numbers[$i] > $limit) {
                    $result[] = $numbers[$i];
                }
            }
            return $result;
        }

        $numbers = [4, 10, 2, 15, 7];
        print_r(filterGreaterThan($numbers, 6));
    ?>
</body>
</html>