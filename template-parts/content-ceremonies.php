<?php
/**
 * Template part for displaying ceremonies content in page-activities.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6 col-xs-12 ceremony'); ?>>
    <div class="panel">

        <header class="entry-header">
            <?php if(has_post_thumbnail()):?>
                <div class="thumbnail">
                    <?php the_post_thumbnail();?>
                </div>
            <?php endif;?>
		    <h3>
			    <?php the_field('ceremony_name'); ?>
            </h3>
        </header><!-- .entry-header -->

        <div class="entry-content">
		    <?php
		    the_field('ceremony_desc')


		    ?>
        </div><!-- .entry-content -->

	    <?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer">
			    <?php
			    edit_post_link(
				    sprintf(
				    /* translators: %s: Name of current post */
					    esc_html__( 'Edit %s', 'achdut' ),
					    the_title( '<span class="screen-reader-text">"', '"</span>', false )
				    ),
				    '<span class="edit-link">',
				    '</span>'
			    );
			    ?>
            </footer><!-- .entry-footer -->
	    <?php endif; ?>
    </div>
</article><!-- #post-## -->
