<?php
mkdir("directories");
chmod("directories", 0777);

?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>
    </head>
    <body>
    <form method = "POST" action = "/makeDirectories.php">
        <
        <input type = "submit" name = "makeDirectory" class = "btn btn-primary mb-3" value = "Submit"/>
    </form>
</html>