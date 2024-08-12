<?php

require "../classes/user.php";

$user = new User;

$user -> createUser($_POST);
?>