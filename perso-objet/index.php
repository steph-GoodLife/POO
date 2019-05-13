<?php
require_once "personnage.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ici votre titre</title>
</head>
<body>

<?php

$user1 = new personnage();
$user1 -> setNickname('lulu');
$user1 -> setSante(100);
$user1 -> setEndurance(10);
$user1 -> setForce(10);
$user2 = new personnage();
$user3 = new personnage();

?>
<pre>
    <?php
    var_dump($user1);
    ?>
</pre>


</body>
</html>