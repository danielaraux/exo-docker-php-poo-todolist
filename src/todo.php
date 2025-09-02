<?php
require_once 'classes/task.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar bg-success">
            <div class="mx-auto">
                <h1 class="text-light">Not to do list</h1>
            </div>
        </nav>
    </header>

    <main class="text-center min-vh-100">



        <button class="btn btn-success mb-2 mt-3"><a href="index.php" class="text-light text-decoration-none">Retour à la création de tâches</a></button>
        <hr>
        <h2 class="m-3">Liste complète des tâches</h2>
        <hr>


        <?php if (!empty($_SESSION['tasks'])): ?>

            <!-- index en clé pour identifier ses tâches, qu'on attribue à $task -->
            <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
                <div class="d-flex align-items-center justify-content-between container mx-auto">
                    <div class=""><?= $task ?></div>

                    <div class="d-flex align-items-center">
                        <form action="action.php?action=toggle" method="POST" class="d-block">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit" class="btn btn-primary m-2"><i class="bi bi-check-circle"></i> / <i class="bi bi-x-circle"></i></button>
                        </form>

                        <form action="action.php?action=delete" method="POST" class="d-block">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>


    </main>


    <footer class="text-center bg-dark p-2">
        <h5 class="text-light">FOOTER de la NotToDoList</h5>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>