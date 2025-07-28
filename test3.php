<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 3</title>
</head>

<body>
    <?php
    function dayType($day)
    {
        // Convert the input to lowercase to make the function case-insensitive
        $day = strtolower($day);
        switch ($day) {
            case "monday":
            case "tuesday":
            case "wednesday":
            case "thursday":
            case "friday":
                return ucfirst($day) . " is a weekday.";
            case "saturday":
            case "sunday":
                return ucfirst($day) . " is a weekend.";
            default:
                return "Invalid day input.";
        }
    }
    // Example usage:
    $day1 = "Monday";
    $day2 = "Saturday";
    $day3 = "Sunday";
    $day4 = "Holiday";
    echo dayType($day1) . PHP_EOL; // Output: Monday is a weekday.
    echo dayType($day2) . PHP_EOL; // Output: Saturday is a weekend.
    echo dayType($day3) . PHP_EOL; // Output: Sunday is a weekend.
    echo dayType($day4) . PHP_EOL; // Output: Invalid day input.
    ?>

</body>

</html>