<?php

$jsonData = file_get_contents('data.json');


$data = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Portfolio</title>
</head>

<body>
    <h1><?php echo $data['title']; ?></h1>
</body>

</html>
