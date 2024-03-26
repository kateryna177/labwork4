<?php


require 'child_class.php';

$class = new ExtendedArithmetics();

// Function to test the program on one number and output all values, find the maximum value, and the number of iterations
$test_number = 27;
$test_calculation = $class->calculate_3x_plus_1($test_number);
echo "Testing on number $test_number:\n";
echo "Values: " . implode(', ', $test_calculation['values']) . "\n";
echo "Maximum Value: " . $test_calculation['max_value'] . "\n";
echo "Number of Iterations: " . $test_calculation['iterations'] . "\n\n";

// Function to calculate function values in the range of numbers from 10 to 10^6
$max_range = 1000000;
$results_array = $class->calculate_range_values($max_range);

// Finding numbers with max and min number of iterations
$max_iterations_number = null;
$min_iterations_number = null;
$max_iterations = -INF;
$min_iterations = INF;

foreach ($results_array as $result) {
    if ($result['iterations'] > $max_iterations) {
        $max_iterations = $result['iterations'];
        $max_iterations_number = $result['number'];
    }
    if ($result['iterations'] < $min_iterations) {
        $min_iterations = $result['iterations'];
        $min_iterations_number = $result['number'];
    }
}

// Printing the numbers with max and min number of iterations, along with iterations and highest values
echo "Number with Maximum Iterations: $max_iterations_number\n";
echo "Number with Minimum Iterations: $min_iterations_number\n";
echo "Maximum Iterations: $max_iterations\n";
echo "Highest Value: " . max(array_column($results_array, 'max_value'));

// Usage demonstration of the generate_arithmetic_progression function

$seed = 2;
$step = 3;
$final_number = 20;

$arithmetic_progression = $class->generate_arithmetic_progression($seed, $step, $final_number);

echo "Arithmetic Progression with seed={$seed}, step={$step}, and final number={$final_number}:\n";
echo "[" . implode(", ", $arithmetic_progression) . "]\n";

$class->draw_histogram(10,20);