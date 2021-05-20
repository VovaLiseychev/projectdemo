<?php
    require 'send_messages.php';
    require 'connection.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages of your life</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main_content.css">
    <link rel="stylesheet" type="text/css" href="/css/property_css.css">
    <script src="/js/script.js"></script>
</head>
<body>
    <div class="block_of_header">
            <div class="block_of_menu">
            <button class="button_on_block_of_menu" onclick="open_menu()">
                <span class="name_of_profile">EveryDayChillGuy</span>
                <div class="logo_of_profile"></div>
            </button>
            <ul class="menu">
                <li class="el_of_profile"><a href="index.php" style="text-decoration: none;"><span style="font-family: 'Courier New', Courier, monospace; font-size: 25px" class="el_of_profile">Profile</a></span></li>
                <li class="el_of_messages"><a href="messages.php" style="text-decoration: none; font-family: 'Courier New', Courier, monospace;"><span style="font-family: 'Courier New', Courier, monospace; font-size: 25px" class="el_of_messages">Messages</a></span></li>
                <li class="el_of_communities"><a href="" style="text-decoration: none; font-family: 'Courier New', Courier, monospace;"><span style="font-family: 'Courier New', Courier, monospace; font-size: 25px" class="el_of_communities">Communities</a></span></li>
                <li class="el_of_settings"><a href="" style="text-decoration: none; font-family: 'Courier New', Courier, monospace;"><span style="font-family: 'Courier New', Courier, monospace; font-size: 25px" class="el_of_Settings">Settings</a></span></li>
            </ul>
        </div>
    </div>
    <div class="form_of_messages">
            <form action="messages.php" method="get" style="margin-bottom: 0px; height: 168px;">
                <textarea name="text" id="" cols="60" rows="1" style="resize: none; outline: none; border: none;" class="text"></textarea>
                <input type="submit" value="Send" class="button_submit">
            </form>
            <div class="block_of_messages">
                <?php
                    $sql = mysqli_query($db, "SELECT * FROM `messages`");
                    $resultAll = mysqli_fetch_all($sql);
                    foreach ($resultAll as $key => $value) {
                        echo " {$value[1]} <br>";
                    }
                ?>
            </div>
    </div>
</body>
</html>





<!-- <input onclick="open_menu()" type="button" class="button_on_profile">
                <ul class="right_block_profile">
                    <li class="block_of_status"></li>
                    <li class="logo_of_profile"></li>
                    <li class="name_of_profile"><span class="username">Имя пользователя</span></li>
                </ul>
            <div class="site_menu">
                <ul class="under_block_site_menu">
                    <li class="el_of_menu"><a href="index.php" class="link_to_something">Профиль</a></li>
                    <li class="el_of_menu"><a href="messages.php" class="link_to_something">Сообщения</a></li>
                    <li class="el_of_menu"><a href="communities.php" class="link_to_something">Сообщества</a></li>
                </ul>
            </div> 
-->