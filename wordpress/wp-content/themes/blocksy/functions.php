<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';


function custom_shrink_header_script() {
     ?>
     <script>
     document.addEventListener("DOMContentLoaded", function() {
         var header = document.getElementById("header");
         var lastScrollY = window.scrollY;

         window.addEventListener("scroll", function() {
             var currentScrollY = window.scrollY;

             if (currentScrollY > 100) {
                 header.classList.add("shrink");
             } else {
                 header.classList.remove("shrink");
             }

             lastScrollY = currentScrollY;
         });
     });
     </script>
     <?php
}
add_action('wp_footer', 'custom_shrink_header_script');
