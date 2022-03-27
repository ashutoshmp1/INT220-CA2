<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution-2</title>
</head>

<body>

    <?php
    $ageDetector = $_POST["age"];
    $least = 26;
    $top = 56;
    if 
    (
        filter_var($ageDetector, FILTER_VALIDATE_INT, array("options" => array("min_range" => $least, "max_range" => $top))) === false
    ) 
    {
        echo ("Invalid Age");
    } 
    else 
    {
        echo ("Valid Age");
    }
    ?>

</body>
</html>