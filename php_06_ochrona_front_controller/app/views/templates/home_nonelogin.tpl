<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <title>{$page_title|default:"Kalkulator"}</title>

    <!-- template start -->
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Foodfinda</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{$conf->app_url}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{$conf->app_url}/images/favicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{$conf->app_url}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{$conf->app_url}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{$conf->app_url}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- template end -->
</head>

<body>
    <!-- header section start -->
    <div class="container-login ">
        <div class="container-fluid ">
            <div class="header_section">
                <div class="container">
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        </div>
                        <div></div>
                        <a class="logo" href="{$conf->app_url}/app/calc.php"><img
                                src="{$conf->app_url}/images/logo_k4.png"></a></a>
                        <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                        <div></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    {block name=content}{/block}










    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2024 All Rights Reserved AK. Design by <a href="https://html.design">Free
                    html
                    Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{$conf->app_url}/js/jquery.min.js"></script>
    <script src="{$conf->app_url}/js/popper.min.js"></script>
    <script src="{$conf->app_url}/js/bootstrap.bundle.min.js"></script>
    <script src="{$conf->app_url}/js/jquery-3.0.0.min.js"></script>
    <script src="{$conf->app_url}/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="{$conf->app_url}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{$conf->app_url}/js/custom.js"></script>
    <!-- javascript -->
    <script src="{$conf->app_url}/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
    </script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript">
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>