<!DOCTYPE html>
<html>

<head>
    <title>userpage</title>
    <link rel="stylesheet" href="page_style.css">
</head>


<body>
    <!-- Top bar -->
    <div id="up_bar">
        <div style="background-color: #333; width: 1200px; margin:auto;font-size: 30px;">
            AkerTalk
            <input type="text" id="search_box" required placeholder="Search...">
        </div>
    </div>

    <!-- main pool -->
    <div class="main_pool">
        <div id="image_div">
            <img src="images\mountain.jpg" style="width:100%;" />
            <img src="images\profile.jpg" id="profile_pic" />
            <br>
            <a href="login_form.php" class="btn_href">login</a>
            <a href="register_form.php" class="btn_href">register</a>
            <a href="logout.php" class="btn_href">logout</a>

        </div>

        <!-- left and right -->
        <div style="display: flex;">
            <!-- left side -->
            <div style=" min-height: 1000px; flex: 1; "></div>
            <!-- right side -->
            <div style="min-height: 400px; flex: 2.5; padding: 20px">
                <!-- add post -->
                <div style="height:150px">
                    <textarea id="text_posts" placeholder="What`s new?"></textarea>
                    <input type="submit" class="btn_post" name="Submit" value="Post">
                </div>
                
                <!-- all posts -->
                <div id="all_post_div">
                    <!-- post1 -->
                    <div id="post">
                        <div>
                            <img src="images\profile.jpg" id="image_for_post" />
                        </div>
                    
                        <div>
                            <div style="font-weight: bold; color:#333">Name</div>
                            asdasdasdasdas
                            date_isodate_setasdswdfasddadasdasdasdas
                            asdaasdasdasdasdasdasdasdasdasdasdasdasdasd
                            date_isodate_setasdasdasdasdasdasdasdasdaads
                            asda
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span>14.11.2022</span>
                        </div>
                    </div>
                    <!-- post1 -->
                    <div id="post">
                        <div>
                            <img src="images\profile.jpg" id="image_for_post" />
                        </div>
                    
                        <div>
                            <div style="font-weight: bold; color:#333">Name</div>
                            asdasdasdasdas
                            date_isodate_setasdswdfasddadasdasdasdas
                            asdaasdasdasdasdasdasdasdasdasdasdasdasdasd
                            date_isodate_setasdasdasdasdasdasdasdasdaads
                            asda
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span>14.11.2022</span>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

</body>

</html>






<!-- I am a comment! 

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title> userpage </title>

    <link rel="stylesheet" href="style.css"
    

</head>

<body>
    <div class="container">
        <div class="content">
            <h3>hi, <span>user</span></h3>
            <h1>welcome<span></span></h1>
            <p> this is an user page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>

</body>

</html>
-->