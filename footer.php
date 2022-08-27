<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ortodoncieOstrava
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <?php echo date("Y"); ?> © G A Dent s.r.o<br>
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'ortodoncieostrava')); ?>">
            <?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'ortodoncieostrava'), 'WordPress');
			?>
        </a>
        <span class="sep"> | </span>
        <?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'ortodoncieostrava'), 'ortodoncieostrava', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(window).on("scroll", function() {
    if ($(window).scrollTop() > 60) {
        $(".header-wrapper").addClass("header-wrapper-active");
    } else {
        $(".header-wrapper").removeClass("header-wrapper-active");
    }
});
</script>

</html>