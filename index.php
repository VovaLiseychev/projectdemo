<?php
    session_start();
    require 'connection.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiveMind</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main_content.css">
    <link rel="stylesheet" type="text/css" href="/css/property_css.css">
    <script src="js/script.js"></script>
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
    <div class="create_post"></div>
    <div class="main_content">
        <div class="block_for_posts"></div>
    </div>
    <div class="main_content">
        <div class="block_for_posts"></div>
    </div>
    <div class="main_content">
        <div class="block_for_posts"></div>
    </div>
    <div class="main_content">
        <div class="block_for_posts"></div>
    </div>
    <div class="main_content">
        <div class="block_for_posts"></div>
    </div>
    
</body>
</html>
