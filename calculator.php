<?php
    class Calculator {
        function calc ($operator, $op1, $op2) {
            if (gettype ($operator) != "string") {
                return "You must enter a string and two numbers"
            }
            if (!is_numeric ($op1) or !is_numeric ($op2)) {
                return "You must enter a string and two numbers"
            }
            switch ($operator) {
                case "+":
                    return $op1 + $op2;
                case "-":
                    return $op1 - $op2;
                case "*":
                    return $op1 * $op2;
                case "/":
                    if ($op2 == 0) {
                        return "Cannot divide by zero";
                    }
                    return $op1 / $op2;
            }
        }
    }
?>