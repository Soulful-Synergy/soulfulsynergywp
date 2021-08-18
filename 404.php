<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package soulfulsynergy
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="error-404 not-found">
        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'soulfulsynergy' ); ?>
        </h1>

        <div class="page-content">
            <p><?php esc_html_e( 'Looks like we couldn\'t find what you were looking for!', 'soulfulsynergy' ); ?>
            </p>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();