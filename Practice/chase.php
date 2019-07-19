<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style3.css">
    <title>Document</title>
</head>
<body>

<style type="text/css">
    table.chess {
        padding: 0;
        margin: 0;
        border-collapse: collapse;
    }
    table.chess td {
        width: 25px;
        height:25px;
        padding: 0;
        margin: 0;
        border: solid 0.5px;
    }
    table.chess td.odd {
        background: #fff;
    }
    table.chess td.even {
        background: #000;
    }
</style>

<table class="chess">
    <?php
        $gridSize = 8;
        for($i = 0; $i <= $gridSize; $i++) {
            echo "<tr>";
            for($j = 0; $j <= $gridSize; $j++) {
                // $classes = [];
                $classes = ($j+$i) % 2 ? 'odd' : 'even';

                // if ($classes === 'odd') {
                    echo '<td class='.$classes.'></td>';
                // } else {
                //     echo '<td class="even"></td>';
                // }
            }
        echo "</tr>";
    }
?>
</table>
</body>
</html>