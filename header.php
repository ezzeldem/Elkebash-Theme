<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="theme-color" content="#1f232c" />
    <meta name="description" content="Description Content" />
 
    
    <?php wp_head(); ?>


    <title>Elkebash</title>
</head>

<body>
        <!--       start header-->
        <div class="header-container">
            <header class="wrapper">
                <div class="header_box">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-sm-6 sm-0">
                                <div class="nav_list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="<?php echo home_url();?>">الرئسية</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_post_type_archive_link( 'place' ) ?>">الاماكن السياحية</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_post_type_archive_link( 'egyptian_king' ) ?>">ملوك مصر</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="logo_box">
                                    <a href="<?php echo home_url();?>">
                                        <img src=" <?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo" class="img-fluid" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="nav_list">
                                    <div class="opne_icon">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <div class="mobile_nav">
                                        <div class="close_icon">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="<?php echo home_url();?>">الرئسية</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_post_type_archive_link( 'place' ) ?>">الاماكن السياحية</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_post_type_archive_link( 'egyptian_king' ) ?>">ملوك مصر</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="list-unstyled sm-0">
                                        <li>
                                            <a href="<?php echo get_post_type_archive_link( 'event' ) ?>">الاحداث القادمة</a>
                                        </li>
                                        <li>
                                            <a href="./index.html">عنصر</a>
                                        </li>
                                        <li>
                                            <a href="./index.html">عنصر</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!--       end header-->