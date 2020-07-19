<!DOCTYPE html>
<html lang="de">

    <head>
        <title><?php 
        
            $name = str_replace(".php", "", basename($_SERVER['PHP_SELF']));

            if(strcmp($name, "Index") > 0) {
                echo "Home";
            } else {
                echo ucfirst($name);
            }
        
        ?> | dotMatthew.dev</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />

        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

</html>