<?php

require 'base_class.php';

class ExtendedArithmetics extends Arithmetics
{

    /**
     * Function to calculate the number of iterations of the 3x+1 function for a given value.
     *
     * @param int $value The input value for which the number of iterations will be calculated.
     *
     * @return int The number of iterations of the 3x+1 function for the given value.
     */
    function calculate_iterations($value)
    {
        $iterations = 0;

        while ($value != 1) {
            if ($value % 2 == 0) {
                $value = $value / 2;
            } else {
                $value = 3 * $value + 1;
            }
            $iterations++;
        }

        return $iterations;
    }

    /**
     * Function to draw a histogram of the number of iterations of the 3x+1 function for values in a given interval.
     *
     * @param int $n The start of the interval.
     * @param int $m The end of the interval.
     */
    function draw_histogram($n, $m)
    {
        echo "<p style='color: #5e8949'><br>Histogram:<br>";
        for ($i = $n; $i <= $m; $i++) {
            $iterations = $this->calculate_iterations($i);
            echo "$i: ";
            for ($j = 0; $j < $iterations; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        echo "</p>";
    }
}