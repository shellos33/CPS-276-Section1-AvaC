<?php
    $buffer = "<ul>";
        
    for ($i = 1; $i <= 4; $i++) {
        $buffer .=  "<li>" . $i . "<ul>";
        for ($j = 1; $j <= 5; $j++) {
            $buffer .= "<li>" . $j . "</li>";
        }
        $buffer .= "</ul></li>";
    }

    $buffer .= "</ul>";
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