<?php
include 'model/Blog.php';

$blog = new Blog();
$blogs = $blog->selectTopFive();
include 'view/home.php';
