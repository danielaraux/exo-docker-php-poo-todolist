<?php

require_once 'classes/task.php';

session_start();

if (!isset($_SESSION['tasks'])) { // Si nous n'avons pas de tableau dans notre variable de session, on le crée
    $_SESSION['tasks'] = [];
}

// Pour le add, je regarde dans l'url si j'ai un param d'action et si ce param est égal à add, alors :
if (isset($_GET['action']) && ($_GET['action'] == "add")) {
    if (!empty($_POST['title'])) {
        $task = new Task($_POST['title']); // Je crée un objet $task et je lui donne comme valeur 'title' qui pointe sur ce que j'ai entré dans mon champ grâce à POST

        $_SESSION['tasks'][] = $task; // Je crée un tableau tasks qui va contenir toutes les taches et j'ajoute mon objet à la fin de ce tableau ([] est le raccourci de array_push)

        header("Location: todo.php"); // On redirige vers Todo.php
        exit;
    }
}

// Pour le toggle (Inverser le statut de la tâche qui est par défaut en false pour le mettre en true)
if (isset($_GET['action']) && $_GET['action'] == "toggle") {
    if (isset($_POST['index']) && isset($_SESSION['tasks'][$_POST['index']])) {
        $task = $_SESSION['tasks'][$_POST['index']];
        $task->toggle();
        $_SESSION['tasks'][$_POST['index']] = $task;
    }
    header("Location: todo.php");
    exit;
}

// Pour le delete de la tâche
if (isset($_GET['action']) && $_GET['action'] == "delete") { // J'efface l'élément à l'aide de son index, j'utilise la fonction unset()
    if (isset($_POST['index']) && isset($_SESSION['tasks'][$_POST['index']])) {
        unset($_SESSION['tasks'][$_POST['index']]);
        header("Location: todo.php");
        exit;
    }
}
