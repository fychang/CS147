<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.js">
        </script>
        <script src="my.js">
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-role="content">
                <h2>
                    
                    <?php
                    if ($_POST['username']=="test" && $_POST['password']=="test") {
                    	echo "Yay!  You're now logged in!  Be happy! =)";
                    } else {
                    	echo "Username or password incorrect.";
                    }
                    	
                    ?>
                </h2>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>