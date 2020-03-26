<?php

require 'app/config.php';

if (isset($_POST["delete"])) {
    $delete = (int) $_POST["delete"];
    $database->delete("anställda", "id", $delete);
    header("Location: admin-home.php");
}