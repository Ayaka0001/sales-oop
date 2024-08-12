<?php

require "../classes/user.php";

$user = new User;

$user -> login($_POST);
?>