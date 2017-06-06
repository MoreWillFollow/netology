<?php

header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');


$file = file_get_contents("contacts.json");
$contacts = json_decode($file, true);

?>

<html>
<head>
<style>

    body {
        font-family: Verdana, "PT Sans Caption", SansSerif;
        font-size: 1.5rem;
        min-width: 800px;
        padding-top: 50px;
    }
    table {
        border:1px solid black;
        border-collapse: collapse;
        margin: 0 auto;

    }
    td, th {
        border:1px solid black;
        padding: 10px;
    }
</style>
</head>

<body>

    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Address</th>
            <th>Number</th>
        </tr>


        <?php
        $i = 0;

        foreach ($contacts as $key => $value) {
            ++$i;
            echo "<tr>";
            echo "<td>".$i."</td>";
            foreach ($value as $title => $data) {
                echo "<td>".$data."</td>";
            }
            echo "</tr>";

        }
        ?>
    </table>
</body>

</html>
