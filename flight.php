<!DOCTYPE html>
<html lang="en">
<head>

<?php 
    include "helper.php";
    
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
<?php 
    $helper = new helper();

    $dataArray = $helper->selectFlight();





        foreach ($dataArray as $key => $value) {
        
            foreach ($value as $keys => $values) {
                echo $values;
                echo "<br>";
            }

            echo "<br>";
            echo "<br>";
            echo "<br>";
        }
    ?>


</table>



</body>
</html>