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
                    Sign in:
                </h2>
                <form method="post" data-ajax="false" action="logged_in.php">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textinput3">
                                Username:
                            </label>
                            <input name="username" id="textinput3" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textinput4">
                                Password
                            </label>
                            <input name="password" id="textinput4" placeholder="" value="" type="password" />
                        </fieldset>
                    </div>
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>