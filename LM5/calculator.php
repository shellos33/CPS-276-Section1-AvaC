<?php
    class Calculator {
        function calc ($operator, $op1, $op2) {
            if (gettype ($operator) != "string") {
                return "You must enter a string and two numbers <br></br>";
            }
            if (!is_numeric ($op1) or !is_numeric ($op2)) {
                return "You must enter a string and two numbers <br></br>";
            }
            switch ($operator) {
                case "+":
                    return "The sum of the numbers is " . ($op1 + $op2) . "<br></br>";
                case "-":
                    return "The difference of the numbers is " . ($op1 - $op2) . "<br></br>";
                case "*":
                    return "The product of the numbers is " . ($op1 * $op2) . "<br></br>";
                case "/":
                    if ($op2 == 0) {
                        return "Cannot divide by zero <br></br>";
                    }
                    return "The division of the numbers is " . ($op1 / $op2) . "<br></br>";
            }
        }
    }
?>