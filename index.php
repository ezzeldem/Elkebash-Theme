	
<?php
get_header();

$args = [
  'section_subtitle' =>"المقالات" ]; 
  get_template_part('./theme_template/parts/content', 'subTitle', $args); ?>

?>


<div class="blog_section" style="padding: 0 0 60px">
    <div class="container">
      
        <div class="row">
            <?php
            $place = new WP_Query([
                'posts_per_page' => 4,
            ]);
            while ($place->have_posts()) {
                $place->the_post(); ?>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="blog_box">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" loding="lazy" class="blog_img img-fluid" />
                    <div class="blog_content">
                        <h4 class="blog_title">
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                        </h4>
                        <p class="prag">
                            <?php if (has_excerpt()) {
                                echo get_the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 18);
                            } ?>
                        </p>
                        <div class="blog_link_box">
                            <a href="<?php the_permalink(); ?>" class="blog_link">
                                أقرأ المذيد
                            </a>
                            <span class="date_box">
                                <?php the_date('M.Y'); ?>
                            </span>
                        </div>
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



<?php 
get_footer();
?>