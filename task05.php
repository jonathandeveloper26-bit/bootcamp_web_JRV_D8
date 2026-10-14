<?php
    function calc_average(array $number_array) {
        return round(array_sum($number_array)/count($number_array),1);
    }
?>