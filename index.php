<?php
/*
Author: TitovV
*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- MatBlog, created with love by Sid Engel. -->
    <!-- https://coolors.co/60463b-856a5d-ccc9e7-6c6f7d-2e3138 -->

    <!-- Jquery -->
    <script src="./src/js/jquery-git.min.js"></script>

    <!-- Sticky -->
    <script src="./src/js/jquery.sticky.js"></script>

    <!-- Materialize -->
    <link rel="stylesheet" href="./src/css/materialize.min.css">
    <script src="./src/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Theme's Stylesheet -->
    <link rel="stylesheet" href="./src/css/theme.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Roboto Font + Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Twitter Widget API -->
    <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- MC Player Counter -->
    <script src="https://cdn.rawgit.com/leonardosnt/mc-player-counter/1.1.0/dist/mc-player-counter.min.js"></script>

    <!-- Mobile Scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Title -->
    <title>AlphaMC - Minecraft</title>

    <!-- Site Description -->
    <meta name="description" content="Minecraft server...">

    <!-- Site Author. Feel free to change this... -->
    <meta name="author" content="Sid Engel">
</head>

<body>
    <!-- NAV -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="./index.html" class="brand-logo">AlphaMC</a>
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <button type="button" class="btn btn-alert">Home</button>
                    <button type="button" class="btn btn-alert">Ranks</button>
                    <button class="btn btn-warning" onclick="window.location.href='/mc/login.php'">Login</button>
                    <button class="btn btn-success" onclick="window.location.href='/mc/register.php'">Register</button>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div class="header" style="background: url('https://i.imgur.com/STVy7vU.jpg');">
        <div clas="row">
            <div class="col s12">
                <img src="https://1000logos.net/wp-content/uploads/2018/08/Minecraft-Logo.png" alt="Logo" style="center-align">
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main container-fluid">
        <!-- What are you waiting for? -->
        <div class="row">
            <div class="col s12">
                <div class="card-panel notification">IP: <b>AlphaMC.EU</b>. 
            </div>
        </div>
        <div class="row">
            <!-- Widget Bar -->
            <div class="col l3 s12">
                <div class="sidebar">
                    <div class="box card-panel z-depth-2">
                        <h5>AlphaMC.EU</h5><span>                <img src="data:image/png;base64,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" alt="Logo" style="center-align"></span>
                    </div>
                    <div class="card-panel z-depth-2">
                        <h5>Donation Goal</h5>
                        <span>150%</span>
                        <div class="progress">
                            <div class="determinate" style="width: 100%; background-color: #7BF788;"></div>
                        </div>
                    </div>
                    <div class="box card-panel z-depth-2">
                        <h2>User Panel</h2>
                        <hr>
						<h5><strong>Loged as:</strong> <?php echo $_SESSION['username']; ?></h5>
						<p>
						<center><td><img src="https://mc-heads.net/head/<?php echo $_SESSION['username']; ?>/39"></center>
						<p><br>
						<button class="btn btn-danger" onclick="window.location.href='/mc/logout.php'">Logout</button>
						<hr>
<center><div class="panel panel-default module">
<div class="panel-heading">
<div class="pull-left"><big><i class="fa fa-archive"></i></big>
Suggestion</div>
<div class="text-right">
<span style="opacity:0.0;">.</span>
</div>
</div>
<div class="panel-body">
<form method="post" action="a-checkout.php">
<input type="hidden" name="packet" value="">
<input type="hidden" name="package_type" value="ranks">
<center>
<a data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#94620640">
<p><center><img src="https://vignette.wikia.nocookie.net/hypixelserver/images/0/08/VIP-0.png/revision/latest?cb=20150804135308" data-filename="Archer.png" style="width: 190px;"></center><br></p> </a></p>
<b>Rank V.I.P</b></p>
</center>
<button type="button"  id="vip" class="btn btn-sm btn-info btn-block" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#94620640">
<big>Buy for
2$ </big> </button>
</form>
</div></center>


                    </div>
                </div>
            </div>

            <!-- First Blog Post -->
            <div class="row">
                <div class="col l9 s12">
                    <div class="card-panel z-depth-2 blog-post">
                        <h5>Put some info here.</h5>
                        <p class="blog-info"><i class="fa fa-calendar"></i> | 5/10 2019</p>
                        <div class="row" style="padding-bottom: 25px;">
                            <div class="col l6 s12">
                                <img class="materialboxed" width="100%" height="100%" src="http://static.planetminecraft.com/files/resource_media/screenshot/1341/pvp-0_6515070_lrg.jpg">
                            </div>
                            <div class="col s12 l6">
                                <h5>Put some info</h5>
                                <p>.....
                                ....</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-panel z-depth-2 blog-post">
                        <h5>Put some info here.</h5>
                        <p class="blog-info"><i class="fa fa-calendar"></i> | 5/10 2019</p>
                        <div class="row" style="padding-bottom: 25px;">
                            <div class="col s12 l6">
                                <h5>Put some info</h5>
                                <p>....
                                ...</p>
                            </div>
                            <div class="col l6 s12">
                                <img class="materialboxed" width="100%" height="100%" src="https://vignette.wikia.nocookie.net/minecraftthe3rd/images/1/12/Minecraft_wallpaper_by_killer3276-d5jfcik.jpg/revision/latest?cb=20130922142520">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECOND BLOG POST -->
        <div class="row">
            <div class="col l9 s12 offset-l3">
                <div class="card-panel z-depth-2 blog-post">
                    <h5>Put your channel main video. <i class="fa fa-film" style="font-size:24px"></i></h5> 
                    <div class="row">
                        <div class="col l6 s12">
                            <div class="video-container">
<iframe width="1280" height="720" src="https://www.youtube.com/embed/sozYr7Nn-Uo" frameborder="0" allow="accelerometer; autoplay;true encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col s12 l6">
                            <h5>Put some info</h5>
                            <p>I...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s6 l6 left-align">
                        <span>Created by <a href="#">TitovV</a>.</span>
                    </div>
                    <div class="col s6 l6 right-align">
                        <span>AlphaMC | 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
