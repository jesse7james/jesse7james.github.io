<?php ini_set("memory_limit", "64M"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name');?></title>

    <!-- Bootstrap 
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
   
    <?php get_header(); ?><?php wp_nav_menu (array ('theme_location' => 'menu')); ?>
     
       <div id="carousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="container bs-cont">

            <div class="col-lg-3">

            </div>
            <div class="col-lg-6 lg6">

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php bloginfo('template_url'); ?>/img/1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/3.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/4.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/5.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Caption</h3>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a href="#carousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>

                </a>
                <a class="right carousel-control" href="#carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
            
            <div class="col-lg-3">

            </div>

        </div>

    </div>
    <?php get_footer(); ?>
    <!-- footer -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed
    <script src="bootstrap/js/bootstrap.js"></script> -->

<?php wp_footer(); ?>

</body>

</html>