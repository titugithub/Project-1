<?php 

/*
    Template Name: Homepage
*/

?>
<?php get_header()?>

<?php 
if ( ! isset( $content_width ) )
    $content_width = 640;
?>

    <!-- ***** Welcome Area Start ***** -->

    <?php if ( true == get_theme_mod( 'switch_setting', true ) ) : ?>
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1><?php echo get_theme_mod('text_setting')?></h1>
                        <p><?php echo get_theme_mod('textarea_setting')?></p>
                        <a href="#features" class="main-button-slider"><?php echo get_theme_mod('text_setting1')?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->

                        <!-- ***** Features Small Item End ***** -->

                    <?php 
                        $herofeatures = get_theme_mod('my_repeater_setting');
                        foreach ($herofeatures as $herofeature) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                    <div class="features-small-item">
                                        <div class="icon">
                                            <?php 
                                                $fetureimg = wp_get_attachment_image_src($herofeature['Hero-Image']);
                                            ?>
                                            <i><img src="<?php echo esc_html($fetureimg[0]) ;?>" alt=""></i>
                                        
                                        </div>
                                        <h5 class="features-title"><?php echo esc_html($herofeature['Hero-Title'] ) ?></h5>
                                        <p><?php echo esc_html( $herofeature['Hero-description'] ) ?></p>
                                    </div>
                                </div>
                            <?php
                        }
                        
                    ?>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <?php if ( true == get_theme_mod( 'switch_set33ting', true ) ) : ?>
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?php echo get_theme_mod('image_sett78ing_url')?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title"><?php echo get_theme_mod('text_setting12')?></h2>
                    </div>
                    <div class="left-text">
                        <p><?php echo get_theme_mod('textarea_setting234')?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title"><?php echo get_theme_mod('text_setti2ng322')?></h2>
                    </div>
                    <div class="left-text">
                        <p><?php echo get_theme_mod('textarea_set4ting')?></p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="<?php echo get_theme_mod('image_set22ting_url')?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <?php if ( true == get_theme_mod( 'switch_se3t433ting', true ) ) : ?>
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1><?php echo get_theme_mod('te45xt_setting')?></h1>
                            <p><?php echo get_theme_mod('textar234ea_setting')?></p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">

                <?php 
                    $works = get_theme_mod('my_red3peater_setting');
                    foreach ($works as $work) {
                        ?>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <a href="#" class="mini-box">
                                <?php 
                                  $img_u3rl = wp_get_attachment_image_src($work['linsdh4k_img']);
                                ?>
                                <i><img src="<?php echo esc_html($img_u3rl[0]) ;?>" alt=""></i>
                                <strong><?php echo esc_html( $work['gsgr33heading'] ) ?></strong>
                                <span><?php echo esc_html( $work['dfhudf55subheading'] ) ?></span>
                            </a>
                        </div>
                        <?php
                    }
                    
                ?>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <?php if ( true == get_theme_mod( 'switc6h_se3t433ting', true ) ) : ?>
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title"><?php echo get_theme_mod('texjjft_setting')?></h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p><?php echo get_theme_mod('text43t3garea_setting')?></p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->

                <!-- ***** Testimonials Item End ***** -->
                
                <?php 
                    $testimonialls = get_theme_mod('my_reqwrgspeater_setting');
                    foreach ($testimonialls as $testimoniall) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="team-item">
                                <div class="team-content">
                                <?php $imrg_u3erl = wp_get_attachment_image_src($testimoniall['testiimg']);?>
                                    <i><img src="<?php echo esc_html($imrg_u3erl[0]) ;?>" alt=""></i>
                                    <p><?php echo esc_html( $testimoniall['tescontent'] ) ?></p>
                                    <div class="user-image">
                                        <?php $img_u3erl = wp_get_attachment_image_src($testimoniall['tejgdas'],array('30', '30'), "", array( "class" => "img-responsive" ))?>
                                        <img src="<?php echo esc_html( $img_u3erl[0] ) ;?>" alt="">
                                    </div>
                                    <div class="d-flex align-items-center testicontent">
                                    <div class="team-info">
                                        <h3 class="user-name"><?php echo esc_html( $testimoniall['testipio'] ) ?></h3>
                                        <span><?php echo esc_html( $testimoniall['testuimfd'] ) ?></span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    
                ?>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <?php if ( true == get_theme_mod( 'swdfdgitc6h_se3t433ting', true ) ) : ?>
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title"><?php echo get_theme_mod('tewwhxt_setting')?></h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p><?php echo get_theme_mod('texethfrjsarea_setting')?></p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title"><?php echo get_theme_mod('gtext_sagetting')?></h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price"><?php echo get_theme_mod('tggsext_setting')?></span>
                                <span class="period"><?php echo get_theme_mod('text_setaaating')?></span>
                            </div>
                            <ul class="list">
                            <?php echo get_theme_mod('ediffghtor_setting')?>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button"><?php echo get_theme_mod('texauht_setting')?></a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                            <h3 class="pricing-title"><?php echo get_theme_mod('tesxt_sethting')?></h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price"><?php echo get_theme_mod('tsgsssext_setting')?></span>
                                <span class="period"><?php echo get_theme_mod('text_setffsting')?></span>
                            </div>
                            <ul class="list">
                            <?php echo get_theme_mod('edsitor_setting')?>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button"><?php echo get_theme_mod('tgssssext_setting')?></a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title"><?php echo get_theme_mod('tejjjjsxt_setting')?></h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price"><?php echo get_theme_mod('texghhyteet_setting')?></span>
                                <span class="period"><?php echo get_theme_mod('te43txt_setting')?></span>
                            </div>
                            <ul class="list">
                            <?php echo get_theme_mod('edifsfdtor_setting')?>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button"><?php echo get_theme_mod('tefshhhhxt_setting')?></a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong><?php echo get_theme_mod('numggber_sedtting')?></strong>
                            <span><?php echo get_theme_mod('t35tfegxt_sedtting')?></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong><?php echo get_theme_mod('numbegr_segdddtting')?></strong>
                            <span><?php echo get_theme_mod('t34g5tfexft_sedgtting')?></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong><?php echo get_theme_mod('numbeer_seg4gdddtting')?></strong>
                            <span><?php echo get_theme_mod('t35tfeeg4exft_sedgtting')?></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong><?php echo get_theme_mod('numbdeer_seg4gdddtting')?></strong>
                            <span><?php echo get_theme_mod('t35tdfeeg4exft_sedgtting')?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    <?php if ( true == get_theme_mod( 'swifsdgstch_setting', true ) ) : ?>
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title"><?php echo get_theme_mod('tehashbasdxt_setting')?></h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p><?php echo get_theme_mod('textard44ea_setting')?></p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">


                <?php

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    );
                    $query = new WP_Query($args);
                    while( $query -> have_posts() ) {
                        $query -> the_post();
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                            <div class="blog-post-thumb">
                                <div class="img">
                                    <img src="<?php the_post_thumbnail_url()?>" alt="">
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a href="#"><?php the_title();?></a>
                                    </h3>
                                    <div class="text">
                                    <?php the_excerpt()?>
                                    <?php the_tags()?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    
                    wp_reset_postdata();
                    
                ?>
                <?php  the_posts_pagination()?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    <?php if ( true == get_theme_mod( 'swiddfsdddgstch_setting', true ) ) : ?>
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title"><?php echo get_theme_mod('tedgshhbasdxt_setting')?></h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p><?php echo get_theme_mod('tddard44ea_setting')?></p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30"><?php echo get_theme_mod('tedgssdghhbasdxt_setting')?></h5>
                    <div class="contact-text">
                    <?php echo get_theme_mod('tddahdsrd44ea_setting')?>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <div id="contact" action="" method="get">

                          <?php echo do_shortcode('[contact-form-7 id="116" title="Contact form 1"]')?>
                        </div>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ***** Contact Us End ***** -->
    
    <!-- ***** Footer Start ***** -->
   <?php get_footer()?>