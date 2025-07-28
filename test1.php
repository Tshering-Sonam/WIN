<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
</head>

<body>
    <?php
    function calculateTriangleArea($base, $height)
    {
        // Calculate the area
        $area = ($base * $height) / 2;
        return $area;
    }
    // Example usage:
    $base = 2;
    $height = 3;
    $area = calculateTriangleArea($base, $height);
    echo "The area of the triangle is: " . $area;
    ?>
</body>

</html>