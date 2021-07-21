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
        <!--Header Starts-->
        <div class="containerBg">
            <header id="siteHeader" class="container-fluid">
                <nav class="container navbar navbar-expand-lg navbar-dark">
                    <div class="container">
                        <a class="navbar-brand logo" href="#siteFooter"> 
                            SALVAVIDAS
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href='?c=home'>HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='?c=readBlogs'>Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='?c=createBlog'>Add blog</a>
                                </li>                                                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <!--Header Ends-->
        <!--PHP to control connection traffic based on MVC-->
        <?php
        if (isset($_GET['c'])) {
            $filename = "controller/{$_GET['c']}.php";
            if (file_exists($filename)) {
                include $filename;
            } else {
                include 'view/errorNonExisting.php';
            }
        } else {
            include "controller/home.php";
        }
        ?>
        <!--Footer Starts-->
        <div class="containerBg">
            <footer id="siteFooter" class="container-fluid">
                SALVAVIDAS - Oscar Coto, Steven Dávila, Juan Gaitán, Teresita Guido, Mauricio Mondragón
            </footer>
        </div> 
        <!--Footer Ends-->
    </body>
</html>
