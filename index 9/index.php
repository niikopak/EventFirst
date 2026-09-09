<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find her</title>
</head>
<body>
    <?php
        function findIndex(array $numbers, int $number) : int {
            $index = 0;
            for ($i=0; $i < count($numbers); $i++) { 
                if ($numbers[$i] == $number) {
                    $index = $i;
                    return $index;
                    break;
                }else {
                    $index = -1;
                }
            }
            return $index;
        }

        $numbers = [5, 8, 12, 20];
        echo findIndex($numbers,12);
    ?>
</body>
</html>