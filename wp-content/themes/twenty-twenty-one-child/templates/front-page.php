<?php
/*
Template Name:  Home Page
*/
$page_id = get_the_ID();
get_header(); ?>

 <!-- header section end from here -->
    <!-- banner section start from here -->
    <section class="banner-sec">
        <div class="banner-box-content">
            <div class="black-box-conttent">
            <?php echo get_field('banner_editor',$page_id);?>  
            </div>
            <div class="slider-box-banner">
                <div class="main-slider-home">

                <?php
				$args = array(
					'post_type' => 'banner',
					'posts_per_page' => 6,
					'orderby' => 'date',
					'fields' => 'ids',
					'order' => 'DESC');


					$posts = new WP_Query($args);

					if ($posts->have_posts()) {
					  while ($posts->have_posts()) {
						$posts->the_post();
						$post_id = get_the_ID();
				?>
                    <div class="slider-image-txt">
                       
                        <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="">
              
                        <?php echo get_the_content($post_id); ?>
                    </div>
                    <?php
						}
					}

					wp_reset_query();
					?>
                </div>
            </div>
        </div>
        <div class="container12">
            <div class="homer-overlay">
                <div class="image-overlay">
                    <img src="<?php echo get_field('banner_image',$page_id);?>  " alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end from here -->
    <!-- how we are section start from here -->
    <section class="how-we-are py">
        <div class="container">
           
        <?php 
        $who_we_are = str_replace('<br />', '', get_field('who_we_are',$page_id));
        
        echo $who_we_are;
        ?>              
        </div>
    </section>
    <!-- how we are section end from here -->
    <!-- choose section start from here -->
    <?php 
    $why_choose_us = str_replace('<br />', '', get_field('why_choose_us',$page_id));
    
    echo $why_choose_us;?>
    <!-- choose section end from here -->
    <!-- services sectionstart from here -->
    <section class="our services py">
        <div class="container">
            <div class="main-services-box">
            <?php 
                $our_services = str_replace('<br />', '', get_field('our_services',$page_id));

                echo $our_services;?>
                
            </div>
            <div class="services-slider">

                <?php
                $args = array(
                'post_type' => 'service',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'fields' => 'ids',
                'order' => 'DESC');


                $posts = new WP_Query($args);

                if ($posts->have_posts()) {
                    while ($posts->have_posts()) {
                    $posts->the_post();
                    $post_id = get_the_ID();
                ?>
                <div class="main-content-services">
                <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="">
                <h3><?php echo get_the_title($post_id); ?></h3>
                </div>
                <?php
                    }
                }

                wp_reset_query();
                ?>



        </div>


            <div class="main-top-form py">
                <?php 
    $contact_form = str_replace('<br />', '', get_field('contact_form',$page_id));
    
    echo $contact_form;?>
            </div>
        </div>
    </section>
    <!-- services section end from here -->
    <!-- testimonials section start from here -->
    <section class="testimonials-sec py">
        <div class="container">
            <div class="testimonials-box">
                <div class="inner-testimonials">
                    <div class="inner-box-main">
                    <?php 
    $testimonial_section = str_replace('<br />', '', get_field('testimonial_section',$page_id));
    
    echo $testimonial_section;?>
                    <div class="reviews-content-cutomer">

                        <?php
                    $latest_post = new WP_Query(array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => 2,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));

                    if ($latest_post->have_posts()) :
                        while ($latest_post->have_posts()) : $latest_post->the_post();
                        $post_id = get_the_ID();
                    ?>
                            <div class="main-customer">
                                <img src="<?php echo get_field('second_image',$post_id);?> " alt="">
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Proin conseq uat mollis
                                    nulla, non maximus sap sollicitudin et. Interdum et ien is the.</p>
                                <div class="cutomer-image">
                                    <div class="main-content-cutomer">
                                        <div class="cutomer-rewiecs-image">
                                           
                                            <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <?php endif; ?>
                                        </div>
                                        <div class="cutomer-rewiecs-txt">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo get_field('sub_title',$post_id);?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_query();
                    endif;
                    ?>   
                        </div>
                    </div>
                </div>
                <div class="inner-testimonials">
                    <div class="reviews-content-cutomer">


                    <?php
                    $latest_posts = new WP_Query(array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => 4, 
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 2
                    ));

                    if ($latest_posts->have_posts()) :
                        while ($latest_posts->have_posts()) : $latest_posts->the_post();
                    ?>
                        <div class="main-customer">
                                <img src="<?php echo get_field('second_image',$post_id);?> " alt="">
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Proin conseq uat mollis
                                    nulla, non maximus sap sollicitudin et. Interdum et ien is the.</p>
                                <div class="cutomer-image">
                                    <div class="main-content-cutomer">
                                        <div class="cutomer-rewiecs-image">
                                           
                                            <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <?php endif; ?>
                                        </div>
                                        <div class="cutomer-rewiecs-txt">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo get_field('sub_title',$post_id);?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                
                    
                        <?php
                        endwhile;
                        wp_reset_query();
                    endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials section end from here -->
    <!-- instagram-section start from here -->
    <section class="instagram-page py">
    <?php 
    $insta_setion = str_replace('<br />', '', get_field('insta_setion',$page_id));
    
    echo $insta_setion; ?>
    </section>
    <!-- instagram section end from here -->
    <!-- faq section start from here -->
    <section class="faq-main py">
        <div class="container">
            <div class="faq-heading">
                <h2> <?php 
    $faq_heading = get_field('faq_heading',$page_id);
    
    echo $faq_heading; ?></h2>
            </div>
            <div class="main-faq-content">
                <div class="faq-box">
                    <div class="accordion_container">

                    <?php
				$args = array(
					'post_type' => 'faq',
					'posts_per_page' => 5,
					'orderby' => 'date',
					'fields' => 'ids',
					'order' => 'ASC');


					$posts = new WP_Query($args);

					if ($posts->have_posts()) {
					  while ($posts->have_posts()) {
						$posts->the_post();
						$post_id = get_the_ID();
				?>   
                        <div class="accordion_head"><?php echo get_the_title($post_id); ?><span class="plusminus">+</span>

                        </div>
                        <div class="accordion_body" style="display: none;">
                            <p> <?php echo get_the_content($post_id); ?></p>
                        </div>
                         <?php
						}
					}

					wp_reset_query();
					?>
                    </div>
                </div>
                <div class="faq-image-box">
                <?php 
    $faq_section = str_replace('<br />', '', get_field('faq_section',$page_id));
    
    echo $faq_section; ?>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- faq section end from here -->
    <!-- after before section start from here -->
    <section class="home-services py">
        <div class="container">
            <div class="after-box">
                <div class="before-box">
                    <img src="<?php
    echo get_field('before_image',$page_id); ?>" alt="">
                    <div class="txt-box-after">
                        <h3><?php 
    echo get_field('before_text',$page_id); ?></h3>
                    </div>
                </div>
                <div class="before-box">
                    <img src="<?php 
    echo get_field('after_image',$page_id); ?>" alt="">
                    <div class="txt-box-after">
                        <h3><?php 
    echo get_field('after_text',$page_id); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- after before section end from here -->
    <!-- subscribe section start from here -->
    <section class="sub-main">
        <div class="container">
            <div class="sub-image">
                <div class="sub12-content">
                <?php 
    $news_letter_section = str_replace('<br />', '', get_field('news_letter_section',$page_id));
    
    echo $news_letter_section; 


    $news_letter_form_id = get_field('news_letter_form_id',$page_id);
    
    echo do_shortcode($news_letter_form_id);  ?>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe section end from here -->
    <!-- footer section start from here -->
<?php get_footer(); ?>

