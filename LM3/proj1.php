<?php
    $buffer = "<table border = 1 style = \"font-family:'Times New Roman'\">";
    for($i = 1; $i <= 15; $i++) {
        $buffer .= "<tr>";
        for($j = 1; $j <= 5; $j++) {
            $buffer .= "<td>Row " . $i . " Column " . $j . "</td>";
        }
        $buffer .= "</tr>";
    }
    $buffer .= "</table>";
?>
<html>
    <head>
    </head>
    <body>
        <pre>
            <main><?php echo $buffer ?></main>
        </pre>
    </body>
</html>
