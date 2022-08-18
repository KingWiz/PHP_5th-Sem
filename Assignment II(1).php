<html>
    <head>
        <title>Assignment 2.1 (Prashil Aryal)</title>
    </head>
    <body>
        <?php

        function evaluate($name,$attendance,$hygine,$rating)
        {
            if($attendance < 80 || $hygine < 50 || $rating < 2){
                echo "$name, You are fired from the Rojan Krina Passal!";
            }else{
                echo "Not Fired for now.";
            }
        }

        evaluate("Kusal Karki", 20, 70, 2);

        ?>
    </body>
</html>