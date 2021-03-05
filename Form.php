<?php


$text = "";
$list = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enterName = "";
    if(isset($_REQUEST['enterName'])) $enterName = $_REQUEST['enterName'];
    if(isset($_REQUEST['list'])) $list = $_REQUEST['list'];

    if(isset($_REQUEST['addName'])) {
        $text = $list . "\n" . $_REQUEST['enterName'];
    };
    if(isset($_REQUEST['clearNames'])) {
        $text = "";
    }
}

?>

<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
        Add Names
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body style="padding:30px">
        <form method="POST" action="/Form.php">
            <div class="mb-3">
                <input type = "submit" name = "addName" value = "Add Name"/>
                <input type = "submit" name = "clearNames" value = "Clear Names"/>
            </div>
            <div>
                <div class="mb-3">
                    Enter name
                    <input type = "text" name = enterName class="form-control"/>
                </div>
                <div class="mb-3">
                    List of Names
                    <textarea name = "lastlist" 
                        rows = "15" cols = "50" 
                        disabled class="form-control" 
                    ><?php echo $list ?></textarea>
                </div>
                <div class="mb-3">
                    List of Names
                    <textarea name = "list" 
                        rows = "15" cols = "50" 
                         class="form-control" 
                    ><?php echo $text ?></textarea>
                </div>
            </div>
        </form>
    </body>
</html>