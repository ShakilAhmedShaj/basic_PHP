<?php

if (isset($_GET['name'])) {
    $name = htmlentities($_GET['name']);

    //echo $name;
}

/*
if (isset($_POST['email'])) {
$email = htmlentities($_POST['email']) ;

echo $email;
}
 */
/*
if (isset($_REQUEST['name'])) {
$name = htmlentities($_REQUEST['name']);

echo $name;
}

if (isset($_REQUEST['email'])) {
$email = htmlentities($_REQUEST['email']);

echo $email;
}
 */

//echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>
<html>

<body>

    <h2>Submit Details</h2>

    <form method="GET" action="7_get_post.php">
        <div>
            <label>Name:</label><br>
            <input type="text" name="name">
        </div>

        <div>
            <label>Email:</label><br>
            <input type="text" name="email">
        </div>

        <input type="submit" value="Submit">
    </form>

    <ul>

        <li>
            <a href="7_get_post.php?name=SHAJ">SHAJ</a>
        </li>
        <li>
            <a href="7_get_post.php?name=BABU">BABU</a>
        </li>

    </ul>


    <h1>
        <?php echo "{$name}'s Profile" ?>
    </h1>

</body>

</html>