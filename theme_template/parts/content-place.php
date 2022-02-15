<div class="place_section pad_40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <?php
                $args = [
                    'section_title' => ' تعرف علي الاماكن السياحية',
                    "section_subtitle" => ' اماكن سياحية',
                    'center_mode' => true,
                ];
                get_template_part('./theme_template/parts/content', 'title', $args);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="place_slider">


                <?php
                    $place = new WP_Query([
                        'posts_per_page' => 6,
                        'post_type' => "place"
                    ]);


                    while($place->have_posts()){
                        $place->the_post(); ?>
                        <div class="place_slider_item">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="place_slider_item_img" alt="img" loding="lazy" />
                        <a class="place_link" href="<?php the_permalink(); ?>"></a>
                        <div class="title_box">
                            <h4 class="project_name">
                                <?php  the_title(); ?>
                            </h4>
                        </div>
                    </div>

                    <?php }       wp_reset_postdata();?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
             
            <?php
                $args = [
                    'button_link' => get_post_type_archive_link( 'place' ) ,
                    "button_title" => "تعرف علي المزيد",
                    'center_mode' => true,
                ];
                get_template_part('./theme_template/parts/content', 'button', $args);
                ?>


            </div>
        </div>
    </div>
</div>
