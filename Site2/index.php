<?php include "./Random_info.php" ?>

<?php

 if(isset($_GET["name"])){
     echo $_GET["name"];
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Friends</h1>
    <?php foreach($people as $person): ?>
        <li>
            <?php echo $person . " is cool"; ?>
        </li>
    <?php endforeach; ?>

    <form method="GET" action="index.php">
        <input name="name"/>
        <input type="submit" value="Submiter"/>
    </form>
</body>
</html>