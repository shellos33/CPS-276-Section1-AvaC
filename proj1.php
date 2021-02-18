<?php
<<<<<<< HEAD
    $buffer = "<ul>";
        
    for ($i = 1; $i <= 4; $i++) {
        $buffer .=  "<li>" . $i . "<ul>";
        for ($j = 1; $j <= 5; $j++) {
            $buffer .= "<li>" . $j . "</li>";
        }
        $buffer .= "</ul></li>";
    }

    $buffer .= "</ul>";
=======
    $buffer = "<table border = 1 style = \"font-family:'Times New Roman'\">";
    for($i = 1; $i <= 15; $i++) {
        $buffer .= "<tr>";
        for($j = 1; $j <= 5; $j++) {
            $buffer .= "<td>Row " . $i . " Column " . $j . "</td>";
        }
        $buffer .= "</tr>";
    }
    $buffer .= "</table>";
>>>>>>> 5a3c8f56b54642f54359f3b0e67ea5cf18b6cbd5
?>
<html>
    <head>
    </head>
    <body>
        <pre>
            <main><?php echo $buffer ?></main>
        </pre>
    </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 5a3c8f56b54642f54359f3b0e67ea5cf18b6cbd5
