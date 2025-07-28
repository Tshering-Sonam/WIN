<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 2</title>
</head>

<body>
    <?php
    function findSingleNumber($arr)
    {
        $numCounts = array();
        // Count the occurrences of each number
        foreach ($arr as $num) {
            if (isset($numCounts[$num])) {
                $numCounts[$num]++;
            } else {
                $numCounts[$num] = 1;
            }
        }
        // Find the number that occurs only once
        foreach ($numCounts as $num => $count) {
            if ($count == 1) {
                return $num;
            }
        }
        return null; // Return null if no single number is found
    }
    // Input sample array
    $inputArray = array(5, 3, 4, 3, 4);
    $singleNumber = findSingleNumber($inputArray);
    echo "The single number in the array is: " . $singleNumber;
    ?>

</body>

</html>