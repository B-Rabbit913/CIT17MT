<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Exercises part 2</title>
    <h1>Array Exercises Part 2</h1>
</head>
<body>

<?php

$exercise1 = file('exercise1.txt', FILE_IGNORE_NEW_LINES);
$exercise2 = file('exercise2.txt', FILE_IGNORE_NEW_LINES);
$exercise3 = file('exercise3.txt', FILE_IGNORE_NEW_LINES);

echo "<br><br>Exercise #1<br><br>";
function countDuplicatesInAnArray(array $numbers_array): void
{
    $duplicates = array_diff_assoc($numbers_array, array_unique($numbers_array));
    echo 'Total number of duplicate elements found in the array is : '.PHP_EOL;
    echo count($duplicates);
    echo PHP_EOL;
}
countDuplicatesInAnArray($exercise1);
echo "<br><br>";

echo "<br><br>Exercise #2<br><br>";
function countFrequencyOfArrayElements(array $numbers_array): void
{
    $frequency_data = array_count_values($numbers_array);
    echo PHP_EOL;
    echo 'The frequency of all elements of an array :' .PHP_EOL;

    foreach($frequency_data as $key => $row) {
        echo sprintf('%d occurs %d times', $key, $row). PHP_EOL;
    }

    echo PHP_EOL;
}
countFrequencyOfArrayElements($exercise2);
echo "<br><br>";

echo "<br><br>Exercise #3<br><br>";
function findEvenOrOddNumbers(array $numbers_array): void
{
    $even_numbers = array();
    $odd_numbers = array();
    
    foreach($numbers_array as $row) {
        ($row % 2 === 0 ? $even_numbers[] = $row : $odd_numbers[] = $row); 
    }

    echo 'The Even elements are : '.PHP_EOL;
    foreach($even_numbers as $row) {
        echo $row.' '.PHP_EOL;
    }
    echo PHP_EOL;
    echo 'The Odd elements are : '.PHP_EOL;
    foreach($odd_numbers as $row) {
        echo $row.' '.PHP_EOL;
    }
    
}
findEvenOrOddNumbers($exercise3);
?>
</body>
</html>
