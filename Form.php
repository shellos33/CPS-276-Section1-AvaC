<?php


$text = "";
$list = "";
$strtokTest = "";
$names = [];
$names[0] = "Placeholder";
$names[1] = "Placeholder 2";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_REQUEST['addName']) {
        //for ($i = 0; $i < 2; $i++) {
            list($fName, $lName) = explode(" ", $_REQUEST['enterName']);
        //}
        
        //list($fName, $lName) = split(' ', $_REQUEST['enterName'], 2);

        $text = $_REQUEST['lastlist'] . $lName . ", " . $fName . "\n";
    }
    if ($_REQUEST['clearName']) {
        $text = "";
    }
}

?>

<html>
    <head>
    <!-- Required meta tags
    <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>
    </head>
    <body style="padding:30px">
        <header>
        </header>
            <form method="POST" action="/Form.php" >
                <h1>
                    Add Names
                </h1>
                <p>
                    <label for = "Add Name"></label>
                    <input type = "submit" name = "addName" value = "Add Name" class="btn btn-primary mb-3"/>
                    <label for = "Clear Names"></label>
                    <input type = "submit" name = "clearName" value = "Clear Names" class="btn btn-primary mb-3"/>
                </p>
                <p>
                    <label for = "name">Enter name</label>
                    <input type = "text" name = enterName class="form-control"></input>
                </p>
                <p>
                    <label for = "name list">List of Names</label>
                    <textarea name = "lastlist" rows = "15" cols = "50" class="form-control" readonly> <?php print_r($text) ?> </textarea>
                </p>
            </form>
    </body>
</html>