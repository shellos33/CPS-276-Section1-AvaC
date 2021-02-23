<?php
    class SubFamily
    {
        function subfamily ($subfam, $species, $famNum, $specNum) {
            if (gettype ($subfam) != "string") {
                return "You must enter a string for subfam ($subfam)";
            }
            if (gettype ($species) != "string") {
                return "You must enter a string for species ($species)";
            }
            if (!is_numeric($famNum)) {
                return "You must enter a number for famNum ($famNum)";
            }
            if (!is_numeric($specNum)) {
                return "you must enter a number for specNum ($specNum)";
            }

            $buffer = "<label for = ";
            for (i = 1; i <= $famNum; i++) {
                $buffer .= "$subfam> $subfam:</label> <br /> <select name = \"$subfam\" font-family = \"Veranda\">";
                for (i = 1; i <= $specNum; i++) {
                    $buffer .= "<option value = \"$species\"> $species</option>";
                }
            }
            }
        }
    }
?>
<html>
    <header>
    ANTS
    </header>
    <body>
        <pre>
            <p>
                Select a subfamily of ants
            </p>

            <label for = subfamily> Ponerinae:</label> <br />
            <select name = "subfamily" font-family = "Verdana">
            <option value = "A. pallipes"> Amblyopone pallipes</option>
            <option value = "P. pennsylvanica"> Ponera pennsylvanica</option>
            <option value = "P. silaceum"> Proceratium silaceum</option>

            <label for = subfamily> Ponerinae:</label> <br />
            <select name = "subfamily" font-family = "Verdana">
            <option value = "A. pallipes"> Amblyopone pallipes</option>
            <option value = "P. pennsylvanica"> Ponera pennsylvanica</option>
            <option value = "P. silaceum"> Proceratium silaceum</option>
        </pre>
    </body>
</html>