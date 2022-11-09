<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $con new mysqli("51.123.43.245","admin","123456","quiz");
        $sql="SELECT id,conntent FROM questions WHERE 1";
            if($wynik=$con->query($sql)){
                while ($row=$wynik->fatch_array()){
                    echo 'id' .$row["id"].'content'.$row["content"];
                }
            }
            $sql="SELECT id,conntent FROM answers WHERE 1";
            if($wynik=$con->query($sql)){
                while ($row=$wynik->fatch_array()){
                    echo 'id' .$row["id"].'content'.$row["content"];
                }
            }
        ?>
    </body>
</html>