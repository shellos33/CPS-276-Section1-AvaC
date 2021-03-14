<?php
    $print = "";
    if(!glob("directories", GLOB_ONLYDIR)) {
        mkdir("directories");
        chmod("directories", 0777);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fName = $_REQUEST['folderName'];
        if($_REQUEST['makeDirectory']) {
            if(!is_dir("./directories/$fName")){
                mkdir("./directories/$fName");
                chmod("./directories/$fName", 0777);
                touch("./directories/$fName/readme.txt");
                $handle = fopen("./directories/$fName/readme.txt", "r+");
                fwrite($handle, $_REQUEST['content']);
                fclose($handle);
                $print = "Path and directory were created";
                $linkText = "<p> <a href = \"./directories/$fName/readme.txt\">Path where file is located</a><br/>";
            }
            else {
                $print = "A directory already exists with that name";
                $linkText = "";

            }
        }
    }
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>
    </head>
    <body style = padding:30px>
        <form method = "POST" action = "/makeDirectories.php">
            <div>
            <h1>File and Directory Assignment</h1>
            <p>Enter a folder name and the contents of a file. Folder names should contin alphanumeric characters only</p>
            <?php
            echo "<p> $print </p> <br/>";
            echo $linkText;
            ?>
            <br/>
            </div>
            <div>
                <label for = "name">Folder Name</label>
                <input type = "text" name = "folderName" class = "form-control"></textarea>
                <br/>
            </div>
            <div>
                <label for = "name">File Content</label>
                <textarea name = "content" rows = "5" cols = "50" class = "form-control"></textarea>
                <br/>
            </div>
            <div>
                <label for = "name">
                <input type = "submit" name = "makeDirectory" class = "btn btn-primary mb-3" value = "Submit"/>
            </div>
        </form>
    </body>
</html>