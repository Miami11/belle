<?php

if (!isset($_SESSION['name'])) {
    echo "You are not logged in!";
    die();
}
