<?php

?>

<!doctype html>
    <html lang="fr">

        <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <title>Todo List</title>
        </head>

        <body>
            <header>
            <h1>My todo list</h1>
            </header>

            <form>
                <input type="text" class="todo-input">
                <button class="todo-button" type="submit">
                <i class="fas fa-plus-square"></i>
                </button>
            </form>

            <div class="todo-container">
                <ul class="todo-list">
                </ul>
            </div>

            <script href="app.js"></script>
        </body>
    </html>