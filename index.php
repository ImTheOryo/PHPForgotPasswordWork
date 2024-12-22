<?php
    include "Includes/functions.php";
    include  "Includes/database.php"
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>PHP Forgot Password Hollyday Break Project</title>

            <link
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
                    rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                    crossorigin="anonymous"
            >
            <link
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
                    rel="stylesheet"
            >
        </head>

        <body>
            <div class="container">

                <?php
                    if (isset($_SESSION['auth'])){
                        require "_Partials/navbar.php";
                        if (isset($_GET['component'])){
                            $componentName = cleanString($_GET['component']);
                            if (file_exists("Controller/$componentName.php")){
                                require "Controller/$componentName.php";
                            }
                        }
                    } else {
                        $_GET['component'] === "resetPassword" ? require "Controller/resetPassword.php" : require "Controller/login.php";
                    }

                ?>

            </div>
            <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                    crossorigin="anonymous"
            >
            </script>
        </body>
    </html>