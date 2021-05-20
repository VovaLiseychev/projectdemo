<?php
    require 'connection.php';
    $isEmpty = false;
    if (empty($_GET['text'])) {
        $isEmpty = true;
    }
    if (ctype_space($_GET['text'])) {
        $isEmpty = true;
    }
    if ($isEmpty == false) {
        mysqli_query($db, "INSERT INTO `messages` (content_of_message) VALUES('$_GET[text]')");
    }
?>