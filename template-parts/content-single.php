<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */



 if(is_single()) :?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>


	<div class="entry-content">
		<?php
			the_content( );


		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php achdut_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php else:
	 $classes = array(
		 'col-sm-6',
		 'col-xs-12',
		 'blog-post'
	 )

     ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
        <div class="panel">
            <?php if(has_post_thumbnail()):?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('post-main');?>
            </div>
            <?php else:?>
                <div class="post-thumbnail">
                    <img src="https://placehold.it/550x150" alt="post-thumbnail">
                </div>
            <?php endif;?>
            <div class="post-info">
                <h4 class="post-title">
                    Post Title
                </h4>
                <div class="post-about"

                    <span class="author"><i class="fa fa-user"></i> <?php the_author();  ?></span><span class="sep">&nbsp;|&nbsp;</span>
                    <time class="posted-at"><i class="fa fa-clock-o"></i>Posted On: <?php the_date(); ?></time><span class="sep">&nbsp;|&nbsp;</span>
                    <span class="post-cat"><i class="fa fa-floder"></i> Categories: <?php the_category(', '); ?></span><span class="sep">&nbsp;|&nbsp;</span>
                    <span class="post-tags"><i class="fa fa-tag"></i>Tags: <?php the_tags('', ', ', ''); ?></span>
                </div>
                <hr class="divider">
                    <div class="post-excerpt">
                        <?php the_excerpt();?>
                    </div>
                <div class="readmore-wrap text-right">
                    <a href="<?php the_permalink();?>" class="btn btn-default btn-readmore">Read Article &raquo;</a>
                </div>
            </div>
        </div>
    </article>

<?php endif;?>
