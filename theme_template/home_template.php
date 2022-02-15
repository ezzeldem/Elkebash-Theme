<?php /* Template Name: Home Template */ get_header(); ?>

<!--           start content-->
<div class="main-container">
    <main class="main wrapper">
        <div class="intro_box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <div class="intro_slider">
                            <?php if (have_rows('home_intro_slider')):
                                while (have_rows('home_intro_slider')):
                                    the_row(); ?>
                            <div class="intro_slider_items" style="background-image: url(' <?php the_sub_field('image_banner'); ?>">
                                <div class="intro_text_box">
                                    <h3 class="intro_text"><?php the_sub_field('title'); ?></h3>
                                </div>
                            </div>
                            <?php
                                endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scond-box">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    $homePagePostsKings = new WP_Query([
                        'posts_per_page' =>
                    2, 'post_type' => 'egyptian_king', 'meta_query' => [['key' => 'intro_box', 'compare' => '=', 'value' => "Add"]], ]); while ($homePagePostsKings->have_posts()) { $homePagePostsKings->the_post(); ?>

                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="big-box">
                            <div class="img-box">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid" />
                            </div>
                            <div class="text-box">
                                <div class="section-title">
                                    <h3 class="min-title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="link-box">
                                        <a href="<?php the_permalink(); ?>">
                                            اقرأ المذيد
                                            <i class="fa fa-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    wp_reset_postdata();
                    ?>

                    <?php
                    $homePagePostsKings = new WP_Query([
                        'posts_per_page' => 2,
                         'post_type' => 'place',
                          'meta_query' => [[
                              'key' => 'intro_box', 
                              'compare' => '=', 
                              'value' => "Add"]],
                             ]);
                               while ($homePagePostsKings->have_posts()) { $homePagePostsKings->the_post(); ?>

                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="big-box">
                            <div class="text-box">
                                <div class="section-title">
                                    <h3 class="min-title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="link-box">
                                        <a href="<?php the_permalink(); ?>">
                                            اقرأ المذيد
                                            <i class="fa fa-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-box">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

        <div class="about_section pad_40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <?php
                        $args = [
                            'section_title' =>
                        'تعرف اكثر عن مصر', "section_subtitle" => ' مصر', 'center_mode' => false, ]; get_template_part('./theme_template/parts/content', 'title', $args); ?>
                        <p class="prag">
                            <?php
                            $egyptpost = new WP_Query([
                                'post_type' => "egypt"
                            ]);
                            while($egyptpost->have_posts()){
                                $egyptpost->the_post();
                                the_field("about_egypt"); 
                            }
                            ?>
                        </p>
                        <div class="link-box mt-2">
                            <a href="<?php echo site_url('/aboutegypt') ?>">
                                نعرف اكثر عن مصر
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 order-ms1">
                        <div class="img_box">
                            <div class="img_1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/egypt.jpg" loding="lazy" alt="" class="img-fluid img_1" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pyramids.webp" loding="lazy" alt="" class="img-fluid img_2" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('./theme_template/parts/content', 'place'); ?>
        <?php get_template_part('./theme_template/parts/content', 'king'); ?>



      
        <div class="statistics_section">
            <div class="container">
                <div class="row justify-content-around">
                    
                    <div class="col-md-3">
                        <div class="statistics_box">
                            <div class="img_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/001-pyramid.png" alt="" class="img-fluid" />
                            </div>
                            <div class="statistics_box_title">
                                <span class="number counter">
                                    <?php the_field('pyramids_counter', 'option') ?>
                                    
                                </span>
                                <h6 class="title">
                                    الاهرامات
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics_box">
                            <div class="img_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/002-pharaoh.png" alt="" class="img-fluid" />
                            </div>
                            <div class="statistics_box_title">
                                <span class="number counter">
                                <?php the_field('kings_counter', 'option') ?>

                                </span>
                                <h6 class="title">
                                    ملك مصري
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics_box">
                            <div class="img_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/003-museum.png" alt="" class="img-fluid" />
                            </div>
                            <div class="statistics_box_title">
                                <span class="number counter">
                                <?php the_field('museums_counter', 'option') ?>
                                </span>
                                <h6 class="title">
                                    متحف
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      


                            
        <?php get_template_part('./theme_template/parts/content', 'blog'); ?>




    </main>
</div>
<!--           end content-->

<?php get_footer();
?>
