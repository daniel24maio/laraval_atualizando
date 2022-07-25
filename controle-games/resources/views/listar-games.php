<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Games</title>
</head>
<body>
    <h1>Games</h1>
    <ul>
        <?php foreach ($games as $game): ?>
        <li><?= $game; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
