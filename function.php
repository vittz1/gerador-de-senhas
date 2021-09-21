<?php

$password = "";
if (isset($_POST['generate'])) {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+~`\|{}[]/><";
    $caracteres = str_shuffle($caracteres);
    $password = substr($caracteres, 0, 20);
}
