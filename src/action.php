<?php

require_once 'classes/task.php';

session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}


if (isset($_GET['action']) && ($_GET['action'] == "add")) {
    $task = new Task("Dormir");

    $_SESSION['tasks'][] = $task;
    header("Location: todo.php");
}
