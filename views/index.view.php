<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        header {
            background-color: grey;
            padding: 20px;
            text-align:center;
        }

    </style>
</head>
<body>
    <header> 
    <h1>
        Hello, Dave
    </h1>

    <?php require('partials/nav.php') ?>    

    </header>

    <div>
        <ul>
            <?php foreach ($tasks as $dbTask) : ?>
                <li>
                    <?php if ($dbTask->completed) : ?>
                        <strike><?= $dbTask->description; ?></strike>
                    <?php else: ?>
                        <?= $dbTask->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach;?>
        </ul>       
</div>    
</body>
</html>