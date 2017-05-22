<div class="container" id="hp-blog">
    <div class="row">
        <div class="col-sm-12 text-center section-title-wrap">
            <h2 class="section-title">Latest Articles</h2>
            <hr class="divider">
        </div>
    </div>
    <div class="row">
        <?php
            $args = array(
                'posts_per_page'    => 4,
                'orderby'           => 'date',
                'order'             =>  'DESC'
            );
            $hp_posts_query = new WP_Query($args);

            if($hp_posts_query->have_posts() ):

            while( $hp_posts_query->have_posts() ): $hp_posts_query->the_post();?>

        <div class="col-md-3 col-sm-6 col-xs-12 blog-item">
            <div class="thumbnail">
                <?php if(has_post_thumbnail($post->id)):?>
                <div class="image-wrap text-center">
                    <?php the_post_thumbnail();?>
                </div>
                <?php else:?>
                    <div class="image-wrap text-center">
                        <img src="http://placehold.it/250x165" alt="<?php the_title($post->id);?>">
                    </div>
                <?php endif;?>
                <div class="text-wrap">
                    <h4 class="post-title"><?php the_title($post->id);?></h4>
                    <div class="post-info">
                        <span class="posted push-left"><?php the_date($post->id);?></span>,
                        <span class="author push-right"><?php the_author($post->id);?></span>
                    </div>
                    <hr class="divider">
                    <div class="post-excerpt">
                        <?php the_excerpt();?>
                    </div>
                    <div class="read-more-wrap">
                        <a href="<?php the_permalink();?>" class="btn btn-default">read more &raquo;</a>
                    </div>
                </div>
            </div><!--/.thumbnail-->
        </div><!--/.blog-item-->
                <?php wp_reset_query();
            endwhile;
        endif;?>

    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12 text-center btn-wrap">
            <a href="<?php the_field('blog_content_btn_link');?>" class="btn btn-default btn-readmore"><?php the_field('blog_content_btn_text');?></a>
        </div>
        <!-- /.col-sm-12 text-center btn-wrap -->
    </div>
</div><!--/#blog-->