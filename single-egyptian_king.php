	
<?php /* Template Name: Home Template */
get_header();
?>





<div class="intro_page_sum intro_box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_page_title">
                                    <h2 class="min_title">
                                    
<?php 
                        
                            while(have_posts()) {
                                the_post();
                                the_title();
                            }     
                            wp_reset_postdata();
                            ?>

                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






<?php 
get_footer();
?>