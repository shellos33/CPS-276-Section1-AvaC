<html>
    <header>
    <style type = "text/css">
    p {
        font-family: Verdana;
    }
    </style>
    </header>
    <body>
        <pre>
            <?php
            require_once "./ants.php";
            $SubFamily = new SubFamily();
            $SubFamily -> subFam("Ponerinae");
            $SubFamily -> species("Amblyopone pallipes");
            echo $SubFamily -> end();
            ?>
            <!--<p>
                <label for = subfamily >Select a subfamily of ants</label> <br />
                <ul>
                    <li><input type = "radio" name = "subfam" value = "Ponerinae">Ponerinae</label> <br /></li>
                    <ul>
                        <li><input type = "radio" name = "species" value = "Amblyopone pallipes">Amblyopone pallipes</label> <br /></li>
                    </ul>
                </ul>
                <ul>
                    <li><input type = "radio" name = "subfam" value = "Myrmicinae">Myrmicinae</label> <br /></li>
                </ul>
                <ul>
                    <li><input type = "radio" name = "subfam" value = "Dolichoderinae">Dolichoderinae</label> <br /></li>
                </ul>
                <ul>
                    <li><input type = "radio" name = "subfam" value = "Formicinae">Formicinae</label> <br /></li>
                </ul>
                
                <label for = subfamily >Select a subfamily of ants</label> <br />
                <select name = "subfamily">
                <option value = "A. pallipes"> Amblyopone pallipes</option>
                <option value = "P. pennsylvanica"> Ponera pennsylvanica</option>
                <option value = "P. silaceum"> Proceratium silaceum</option>
                -->
            </p>
        </pre>
    </body>
</html>