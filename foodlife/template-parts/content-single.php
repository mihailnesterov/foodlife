<?php
/**
 * Template part for displaying WC single product content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foodlife.shop
 */

?>
<!-- Page Content -->
<div class="container animated fadeIn">

    <div class="row">
        <div class="col-12">

            <!-- вывод товаров каталога -->
            <div class="row">
                <div class="col-12" style="margin-top:6em;">
                    <?php  
                    $args = array(
                        'delimiter'  => null,
                        'wrap_before'  => '<ol class="breadcrumb bg-light small">',
                        'wrap_after' => '</ol>',
                        'before'   => '<li class="breadcrumb-item">',
                        'after'   => '</li>',
                        //'home'    => null
                    );
                    ?>
                    <?php woocommerce_breadcrumb( $args ); ?>
                </div>

                <div class="col-12 text-center p-3 my-3">
                    <h1><?= the_title() ?></h1>
                </div>
                
                <header class="entry-header">
            		<?php
            		/*if ( is_singular() ) :
            			the_title( '<h1 class="entry-title">', '</h1>' );
            		else :
            			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            		endif;*/
            
            		if ( 'post' === get_post_type() ) :
            			?>
            			<div class="entry-meta">
            				<?php
            				foodlife_posted_on();
            				foodlife_posted_by();
            				?>
            			</div><!-- .entry-meta -->
            		<?php endif; ?>
            	</header><!-- .entry-header -->
            
            	<?php foodlife_post_thumbnail(); ?>
            
            	<div class="entry-content">
            		<?php
            		the_content( sprintf(
            			wp_kses(
            				/* translators: %s: Name of current post. Only visible to screen readers */
            				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'foodlife' ),
            				array(
            					'span' => array(
            						'class' => array(),
            					),
            				)
            			),
            			get_the_title()
            		) );
            
            		wp_link_pages( array(
            			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foodlife' ),
            			'after'  => '</div>',
            		) );
            		?>
            	</div><!-- .entry-content -->
            
            	<footer class="entry-footer">
            		<?php foodlife_entry_footer(); ?>
            	</footer><!-- .entry-footer -->
                
                
            </div>
            <!-- /.row -->
            <!-- /.вывод товаров каталога -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
