<?php
/**
 * 404 pages (Not Found).
 *
 * @package ctravel-adven-lite
 */
get_header(); ?>
<div class="container">
    <div class="page_content">
        <section class="site-main" id="sitemain">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found', 'ctravel-adven-lite' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn...Don\'t worry... it happens to the best of us.', 'ctravel-adven-lite' ); ?></p>
               
            </div><!-- .page-content -->
        </section>
        
            <?php get_sidebar();?>
        
        <div class="clearfix"></div>
    </div><!--row-->
</div><!--container-->
<?php get_footer(); ?>