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
        <div style="display:flex; flex-direction:row; flex:1;">
            <div style="width:100%;">
                <?php echo date("Y"); ?> © G A Dent s.r.o <a
                    href="https://www.ortodoncieostrava.cz">www.ortodoncieostrava.cz</a><br>
                Tyršova 1832/9, 702 00 Moravská Ostrava
            </div>
            <div style="display:flex; flex-direction:column; ">
                <a class="to-the-top" href="#top">
                    <span class="to-the-top-long">
                        Nahoru&nbsp;<span class="arrow" aria-hidden="true">↑</span> </span><!-- .to-the-top-long -->
                </a>
            </div>
        </div>
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