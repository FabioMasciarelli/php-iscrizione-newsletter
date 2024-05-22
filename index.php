<?php

require_once __DIR__  . '/partials/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <h2><?php echo check() ?></h2>
        <input type="text" name="mail" id="mail">
        <label for="mail"></label>
        <button type="submit">Accedi</button>
    </form>
</body>

</html>