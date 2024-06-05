<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */



?>
 <footer>
        <section class="main-footer">
            <div class="container">

                <div class="footer-content">
                    <div class="txt-footer">
                        <h3>Main Links</h3>
                        <ul>
						<?php

							$menu_name = 'Footer Menu';


							$menu = wp_get_nav_menu_object($menu_name);

							if ($menu) {

								$menu_items = wp_get_nav_menu_items($menu->name);
								//print_r($menu_items);
								if ($menu_items) {
									
								
									foreach ($menu_items as $menu_item) {
										
										echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
									}
								
								} 
							} 
						?>
                            
                        </ul>
                    </div>
                    <div class="txt-footer">
                        <h3>About Us</h3>
                        <ul>
						<?php

						$menu_name = 'Footer Secondary Menu';


						$menu = wp_get_nav_menu_object($menu_name);

						if ($menu) {

							$menu_items = wp_get_nav_menu_items($menu->name);
							//print_r($menu_items);
							if ($menu_items) {
								
							
								foreach ($menu_items as $menu_item) {
									
									echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
								}
							
							} 
						} 
						?>
                        </ul>
                    </div>
                    <div class="txt-footer">
                        <?php dynamic_sidebar('footer_contact_1'); ?>
                    </div>

                    <div class="txt-footer">
					<?php dynamic_sidebar('footer'); ?> 
                    </div>
                </div>

            </div>
            <div class="main-copy-right">
                <div class="container">
				<?php dynamic_sidebar('copy_right_1'); ?> 
                    
                </div>
            </div>
            </div>
        </section>

    </footer>
    <!-- footer section end from here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
	<?php wp_footer(); ?>
</body>

</html>
	
  