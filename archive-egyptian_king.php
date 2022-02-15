<?php get_header();

  $args = [
    'section_subtitle' => 'جميع الملوك العظماء'
  ];
  get_template_part('./theme_template/parts/content', 'subTitle', $args);
  ?>

<div class="allKings_section">
    <div class="container">
        <div class="row">
            <?php
          while(have_posts()) {
            the_post();
            ?>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="allKings">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="king_slider_item_img img-fluid" alt="img" loding="lazy" />
                    <a class="king_link" href="<?php the_permalink(); ?>"></a>
                    <div class="title_box">
                        <h4 class="project_name">
                            <?php  the_title(); ?>
                        </h4>
                    </div>
                </div>
            </div>

            <?php
          }
	
          the_posts_pagination();
          
        ?>



        </div>
    </div>
</div>


<?php get_footer();
?>
