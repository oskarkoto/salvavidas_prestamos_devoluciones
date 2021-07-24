<!--Main Container Starts-->
<div class="containerBg">
    <div class="container">
        <div id="mainContainer" class="row">
            <!--Content Container Starts-->
            <div id="contentElement" class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 justify-content-center">
                <div class="row">
                    <p> <br>Sistema de prestamos y devoluciones<br><br>
                        .Go to <span style="color:yellow" onclick="window.location.href = '?c=readBlogs';">Blog</span> to read all entries<br>
                        .Go to <span style="color:yellow" onclick="window.location.href = '?c=createBlog';">Add blog</span> to add a personal entry</p>
                </div>
                <div id = "contentImg"class="row">
                    <img src="img/content.png"> 
                </div>
            </div>
            <!--Content Container Ends-->
            <!--Side Container Starts-->
            <div id="sidebarElement" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="sideBarTitle row">
                    <div class="span4">
                        <div class="sideHeading">
                            <p style="float:left">Recent posts</p>
                            <img src="img/Blog-icon.png">
                        </div>
                    </div>
                </div>
                <div class="top5BlogEntries">
                    <?php
                    $i = 1;
                    foreach ($blogs as $blog) {
                        $imgSrc = "img/newPost{$i}.png";
                        ?>
                        <div class="topBlogEntry row">
                            <div class="span4">
                                <img style="float:left" src=<?= $imgSrc ?>>
                                <div class="contentHeading">
                                    <h5><?= $blog->title ?></h5>
                                </div>
                                <p style="clear:both"><?= $blog->message ?></p>
                                <form id="myForm" action='?c=readSingleBlog' method="POST">
                                    <input type="hidden" name="id" value=<?= $blog->id ?>/>
                                    <input type="hidden" name="category" value=<?= $blog->category ?>/>
                                    <input type="hidden" name="title" value=<?= $blog->title ?>/>
                                    <input type="hidden" name="message" value=<?= $blog->message ?>/>
                                    <input type="hidden" name="date" value=<?= $blog->date ?>/>
                                    <input type="hidden" name="author" value=<?= $blog->author ?>/>
                                    <input type="submit" class="link-button" value="More Information..." />
                                </form>
                            </div>
                        </div>
                        <?php $i++;
                    }?>
                </div>
            </div>
            <!--Side Container Ends-->
        </div>                
    </div> 
</div> 
<!--Main Container Ends-->
