<?php

class Arithmetics
{
    /**
     * Function to calculate the mathematical function 3x + 1 and perform various operations on the results.
     *
     * @param int $number The input number for the function.
     *
     * @return array An array containing the function values, maximum value, and number of iterations.
     */
    function calculate_3x_plus_1($number) {
        $values = [];
        $max_value = -INF;
        $max_iterations = 0;

        while ($number != 1) {
            $values[] = $number;

            if ($number > $max_value) {
                $max_value = $number;
            }

            if ($number % 2 == 0) {
                $number /= 2;
            } else {
                $number = 3 * $number + 1;
            }

            $max_iterations++;
        }

        $values[] = 1; // Adding the final value of 1
        $max_value = max($max_value, 1);

        return ['values' => $values, 'max_value' => $max_value, 'iterations' => $max_iterations];
    }

    /**
     * Function to calculate function values in the range of numbers from 10 to a specified maximum number.
     *
     * @param int $max_number The maximum number in the range.
     *
     * @return array An array containing numbers, max values, and number of iterations for each number in the range.
     */
    function calculate_range_values($max_number) {
        $results = [];

        for ($i = 10; $i <= $max_number; $i++) {
            $calculation = $this->calculate_3x_plus_1($i);
            $results[] = ['number' => $i, 'max_value' => $calculation['max_value'], 'iterations' => $calculation['iterations']];
        }

        return $results;
    }

    /**
     * Generate an arithmetic progression array based on the provided seed, step, and final number.
     *
     * @param int $seed The starting number of the progression.
     * @param int $step The common difference between each term.
     * @param int $final_number The last number in the progression.
     *
     * @return array The arithmetic progression array.
     */
    function generate_arithmetic_progression($seed, $step, $final_number)
    {
        $progression = array();

        // Add the seed as the first element in the progression.
        $progression[] = $seed;

        // Generate the rest of the progression based on the step and final number.
        while (($seed + $step) <= $final_number) {
            $seed += $step;
            $progression[] = $seed;
        }

        return $progression;
    }

}