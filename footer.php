<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

/**
 * Executes actions before main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_before_primary_end' ); ?>

</main><!--/.neve-main-->

<?php

/**
 * Executes actions after main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_after_primary' );

/**
 * Filters the content parts.
 *
 * @since 1.0.9
 *
 * @param bool   $status Whether the component should be displayed or not.
 * @param string $context The context name.
 */
if ( apply_filters( 'neve_filter_toggle_content_parts', true, 'footer' ) === true ) {

	/**
	 * Executes actions before the footer was rendered.
	 *
	 * @since 1.0.0
	 */
	do_action( 'neve_before_footer_hook' );

	/**
	 * Executes the rendering function for the footer.
	 *
	 * @since 1.0.0
	 */
	do_action( 'neve_do_footer' );

	/**
	 * Executes actions after the footer was rendered.
	 *
	 * @since 1.0.0
	 */
	do_action( 'neve_after_footer_hook' );
}
?>

</div><!--/.wrapper-->
<?php

wp_footer();

/**
 * Executes actions before the body tag is closed.
 *
 * @since 2.11
 */
do_action( 'neve_body_end_before' );

?>
<button onclick="topFunction()" id="myBtn" title="Go to top">To Top</button>
<script>

    
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

</body>

</html>
