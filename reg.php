<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main_content.css">
    <link rel="stylesheet" href="css/property_css.css">
    <script src="js/script.js"></script>
    <title>Registration your life</title>
</head>
<body>
    <div class="block_of_header">
        <div class="block_of_registration">
            <form action="reg.php" method="get" style="width: inherit; height: inherit; margin-top: 5px">
                <input name="username" type="text" style="width: 150px; border: none; outline: none;" placeholder="username">
                <input name="password" type="text" style="width: 150px; border: none; outline: none;" placeholder="password">
                <input type="submit" style="position: relative; float: right; right: 35px; border: none; outline: none;">
            </form>
            <?php
                require 'connection.php';
                $isEmpty = false;
                if ($_GET['username'] == "" or ctype_space($_GET['username'])) {
                    $isEmpty = true;
                }elseif ($_GET['password'] == "" or ctype_space($_GET['password'])) {
                    $isEmpty = true;
                }
                if ($isEmpty == false) {
                    $username = $_GET['username'];
                    $password = $_GET['password'];
                }
                $result = mysqli_query($db, "SELECT `id_of_user` FROM `users` WHERE username='$username'");
                $row = mysqli_fetch_array($result);
                if (!empty($row['id_of_user'])) {
                    exit();
                }
                if ($isEmpty == false) {
                    mysqli_query($db, "INSERT INTO `users` (username, password) VALUES('$username', '$password')");
                    header("Location: localhost");
                }
            ?>
        </div>
    </div>
</body>
</html>