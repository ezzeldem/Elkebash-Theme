<?php /* Template Name: Egypt Template */ get_header(); 
$args = [
  'section_subtitle' =>
get_the_title() ]; get_template_part('./theme_template/parts/content', 'subTitle', $args); ?>

<div class="about_egy_section">
    <div class="container">   
   <?php while ( have_posts() ) : the_post(); ?>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="intro_img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Flag" class="about_egy_img img-fluid" />
                </div>
            </div>
            <div class="col-md-10">
                <div class="blog_detiles">
                    <h4 class="blog_title">
                        <span>
                            <?php the_title(); ?>
                        </span>
                    </h4>
                    <p class="prag">
                        <?php  the_content(); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle"> </span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle"> </span> <span class="nav-title">%title</span>',
                    )
                );
                ?>
            </div>
        </div>
        <?php endwhile; ?>

  
    </div>
</div>

<?php get_template_part('./theme_template/parts/content', 'place'); ?>
<?php get_template_part('./theme_template/parts/content', 'king'); ?>
<?php get_footer();?>
