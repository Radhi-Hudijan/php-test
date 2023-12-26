<?php


// echo $_GET['name'];
// echo $_GET['age'];

if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Radhi&age=30"> click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?name=Radhi&age=30" method="POST">
    <div>

        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>

    <div>

        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name=" submit">



</form>