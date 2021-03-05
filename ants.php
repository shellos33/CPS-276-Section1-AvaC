<?php
    class SubFamily {
        var $buffer = "";
        public function subFam ($subfam) {
            if (gettype ($subfam) != "string") {
                return "You must enter a string for subfam ($subfam)";
            }x
            $buffer .= "<p><label><ul><li><input type = \"radio\" name = \"subfam\" value = $subfam>$subfam</label></li>";
            echo "subFam worked";
        }
        public function species ($species) {
            if (gettype ($species) != "string") {
                return "You must enter a string for species ($species)";
            }
            return $buffer .= "<ul><li><input type = \"radio\" name = \"species\" value = $species> $species</label></li>";
            echo "species worked";
        }
        function end() {
            $buffer .= "</ul></ul></p>";
            echo "end worked";
            echo $buffer;
        }
    }
?>