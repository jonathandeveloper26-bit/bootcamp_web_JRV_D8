<?php
    function calc(string $operator, int $nmbr1, int $nmbr2) {
        $allowed_operators = ["+", "-", "*", "/"];
        if (in_array($operator, $allowed_operators)) {
            switch ($operator) {
                case "+":
                    return $nmbr1 + $nmbr2;
                    break;
                case "-":
                    return $nmbr1 - $nmbr2;
                    break;
                case "*":
                    return $nmbr1 * $nmbr2;
                case "/":
                    if ($nmbr2 == 0) {
                        return "Cannot Divide by 0";
                    } else {
                     return $nmbr1 / $nmbr2;
                    }
                default:
                    return;
            }
        } else{
            return "Unknown operator";
        }

    }
?>