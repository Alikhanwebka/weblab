<?php
	mb_internal_encoding("UTF-8");
    session_start();
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'webtasks';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if (isset($_POST['name'])) {
        $login = $_POST['name'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM admins WHERE username='$login' AND pass='$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['login'] = $login;
            $_SESSION['admin'] = $row['admin'];
        }
        header('location: ../task11/taskC.php');
        
    }
?>
<form action="Task11-C.php" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <input type="submit">
</form>