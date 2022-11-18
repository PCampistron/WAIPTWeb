<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="GET">
        <input type="text" name="query"/>
        <ul>
            <li> 
                <div draggable="true" class="box"> A </div>
            </li>
            <li> 
                <div draggable="true" class="box"> B </div>
            </li>
            <li> 
                <div draggable="true" class="box"> C </div>
            </li>
        </ul>
        <input type="checkbox" name="criteres"/>
        <input type="submit" value="search"/>

        <?php
            $truc = 0;
        ?>
</body>
</html>