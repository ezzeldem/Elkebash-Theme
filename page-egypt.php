<?php /* Template Name: Egypt Template */ get_header(); 
$args = [
  'section_subtitle' =>
get_the_title() ]; get_template_part('./theme_template/parts/content', 'subTitle', $args); ?>

<div class="about_egy_section">
    <div class="container">
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
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('./theme_template/parts/content', 'place'); ?>
<?php get_template_part('./theme_template/parts/content', 'king'); ?>
<?php get_template_part('./theme_template/parts/content', 'blog'); ?>

<?php get_footer();?>
