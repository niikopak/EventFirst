<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remover negative</title>
</head>
<body>
    <?php
        function removeNegative(array &$numbers){
            for ($i=0; $i < count($numbers); $i++) { 
                if ($numbers[$i]<0) {
                    //Удаление i элемент, начиная с индекса 1
                    array_splice($numbers, $i, 1); 
                }
            }
        }

        $numbers = [5, -2, 7, -8, 1, 0];
        removeNegative($numbers);
        print_r($numbers);
    ?>
</body>
</html>