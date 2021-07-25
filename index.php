<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salvavidas</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel = "stylesheet" accesskey="" type = "text/css" href = "css/myStyle.css" />
        <script src="jquery.min.js"></script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--PHP to control connection traffic based on MVC-->
        <?php
        include 'view/header.php';
        
        if (isset($_GET["c"])) {
            include 'controller/' . $_GET["c"] . '.php';
        } else {
            include 'view/home.php';
        }        
        require 'view/footer.php';
        ?>    
    </body>
</html>
