<?php

require_once 'classes/task.php';

session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar bg-dark">
            <div class="mx-auto">
                <h1 class="text-light">Not to do list</h1>
            </div>
        </nav>
    </header>

    <main class="text-center">

        <form action="action.php?action=add" method="POST" class="m-5 d-block">
            <div class="m-2 container mx-auto">
                <label for="action" class="form-label mt-2"><b>Saisissez le titre d'une tâche</b></label>
                <input type="text" for="action" name="title" class="form-control" placeholder="Entrez un titre..." id="title" maxlength="30" required>
                <button type="submit" class="btn btn-success mt-3 w-100">Envoyer</button>
            </div>
        </form>

        <button class="btn btn-success"><a href="todo.php" class="text-decoration-none text-light"><b>Afficher la liste des tâches complète</b></a></button>
        <!-- Pour l'instant, je récupère ma saisie dans $_POST -->

    </main>


    <footer class="text-center bg-dark fixed-bottom p-2">
        <h4 class="text-light">NotToDoList© 2025.</h4>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>