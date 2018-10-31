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
    <?php 
    $randomThings = [1,3, "3", "december", "crazy", " "];

    foreach($randomThings as $randomThing){
        if (is_string($randomThing)){
            echo $randomThing . "is a string <br/>";
        }
    }
    
    ?>
        <?php  $loggedIn = false ?>

    <?php   if($loggedIn) { ?>
    <h1>Welcome Man!</h1>
    <?php }?>



    <?php 
    
    $email = $_POST['email'];
    $newName = $_POST['name'];

    echo $email;
    echo $newName;
    
    ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="email"/>
        <input type="text" name="name"/>
        <input value="Submit" type="submit"/>
    </form>
</body>
</html>