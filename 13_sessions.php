<?php



session_start();

if (isset($_POST['submit'])) {
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if ($username == 'radhi' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-test/extras/dashboard.php');
    } else {
        echo "Invalid Login";
    }
}

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>?name=Radhi&age=30" method="POST">
    <div>
        <label for="username">UserName:</label>
        <input type="text" name="username">
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>

    <input type="submit" value="Submit" name=" submit">



</form>