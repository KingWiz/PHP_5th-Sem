<html>
    <head>
        <title>Assignment 2.2 (Prashil Aryal)</title>
    </head>
    <body>
        <?php

        function evaluate($name,$attendance,$hygine,$rating)
        {
            if(($attendance < 80 && $hygine < 50) || ($hygine < 50 && $rating < 2))
            {
                echo "$name, You are fired from the Rojan Krina Passal!";
            }
            else{
                echo "Not Fired for now.";
            }
        }
        evaluate("Kusal Karki", 20, 70, 3);

        ?>
    </body>
</html>