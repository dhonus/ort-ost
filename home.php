<?php

/**
 Template Name: Home template

 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ortodoncieOstrava
 */

get_header();
?>
<?php
echo do_shortcode('[smartslider3 slider="1"]');
?>

<main id="primary" class="site-main">

    <?php
	// Define our WP Query Parameters
	$the_query = new WP_Query('posts_per_page=5'); ?>

    <?php
	// Start our WP Query
	while ($the_query->have_posts()) : $the_query->the_post();
		// Display the Post Title with Hyperlink
	?>

    <article class="news">
        <!--<a href="<?php the_permalink() ?>">-->
        <h2><?php the_title(); ?></h2>
        <!--</a>-->
        <?php
			// Display the Post Contents
			the_content(); ?>
    </article>
    <?php
	// Repeat the process and reset once it hits the limit
	endwhile;
	wp_reset_postdata();
	?>
    </p>

    <!--<section class="homepage-wrapper">-->
    <?php
	if (have_posts()) :

		if (is_home() && !is_front_page()) :
	?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>


    <?php
		endif;

		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part('template-parts/content', get_post_type());

		endwhile;

		the_posts_navigation();

	else :

	/* get_template_part('template-parts/content', 'none'); */

	endif;
	?>

    <!--</section>-->
</main><!-- #main -->

<?php
/*get_sidebar();*/
get_footer();