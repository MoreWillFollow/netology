<html>
<head>
    <meta charset="UTF-8">
</head>
</html>


<?php
error_reporting(E_ALL);


$resource = -60;
$usable_or_not = 1; //Usable if 1, not Usable if 0
function writeOnPaper () {
    $resource = 1000;

    $resource = $resource - 73;

    if ($resource <= 0) {
        $resource = 7;
        $usable_or_not = 0;
    }
    return $usable_or_not;
}


var_dump(writeOnPaper());