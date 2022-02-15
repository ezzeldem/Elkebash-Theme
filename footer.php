     <!--           start footer-->
     <div class="footer-container">
            <footer class="wrapper">





                <div class="subscrip_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="icone_box">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <h5 class="subscrip_title">
                                    اشترك لتحصل علي الاخبار
                                </h5>
                                <p class="prag">
                                    اشترك معنا واحصل على أحدث المقالات والتحديثات حول التاريخ الفرعوني.
                                </p>
                                <form class="subscrip_form" action="">
                                    <input type="text" id="subscrip_input" placeholder="البريد الاكتروني">
                                    <button>اشترك</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-section">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-between">


                            <div class="col-lg-4 col-md-12">
                                <h3 class="footer-title" data-slide="box-1">المزارات السياحيه
                                    <i class="fas fa-plus"></i>

                                </h3>
                                <div class="footer-ul-box">
                                    <ul class="footer-ul" id="box-1">
                                    <?php
                    $homePlace = new WP_Query([
                        'posts_per_page' => 10,
                        'post_type' => "place"
                    ]);


                    while($homePlace->have_posts()){
                        $homePlace->the_post(); ?>
                        

                    <li>
                                            <a id="link-cms-page-2-2" class="cms-page-link" href="<?php the_permalink(); ?>"
                                                title="Legal notice">
                                                <?php  the_title(); ?>
                                            </a>
                                        </li>

                            <?php }      wp_reset_postdata(); ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <h3 class="footer-title" data-slide="box-2">الملوك


                                    <i class="fas fa-plus"></i>
                                </h3>
                                <div class="footer-ul-box">
                                    <ul class="footer-ul" id="box-2">
                                        

                                        <?php
                    $homePlace = new WP_Query([
                        'posts_per_page' => 10,
                        'post_type' => "egyptian_king"
                    ]);


                    while($homePlace->have_posts()){
                        $homePlace->the_post(); ?>
                        

                    <li>
                                            <a id="link-cms-page-2-2" class="cms-page-link" href="<?php the_permalink(); ?>"
                                                title="Legal notice">
                                                <?php  the_title(); ?>
                                            </a>
                                        </li>

                            <?php }      wp_reset_postdata(); ?>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copy-footer">
                    <div class="container-fluid">
                        <div class="row align-items-center">


                            <div class="col-lg-5 col-md-12">
                                <a href="#" class="copy-link">
                                    © جميع حقوق النشر محفوظه الي Dmoon 4 Ever
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="sochile-box">
                                    <ul class="sochile-ul list-unstyled">


                                    <?php if( have_rows('social_media_links', 'option') ):
                                         while( have_rows('social_media_links', 'option') ): the_row(); ?>

                                                <li>

                                                <a href="#" style="color:<?php the_sub_field('color'); ?>">
                                                <?php the_sub_field('icon'); ?>
                                                </a>

                                                </li>

                                            <?php endwhile;  endif; ?>

                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </footer>
        </div>
        <!--           end footer-->
        </div>


<?php wp_footer(); ?> 
</body>

</html>
