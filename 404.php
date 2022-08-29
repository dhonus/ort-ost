<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ortodoncieOstrava
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="error-404 not-found " style="width:50%; margin:auto; padding:4rem 0; text-align:center;">
        <header class=" page-header" style="display:flex; justify-content:center;">
            <h1 class="page-title"><?php esc_html_e('Stránka nebyla nalezena', 'ortodoncieostrava'); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e('Vámi hledaná stránka nebyla nalezena. Možná byla odebrána, přejmenována, nebo neexistuje.', 'ortodoncieostrava'); ?>
            </p>

        </div><!-- .page-content -->
    </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();