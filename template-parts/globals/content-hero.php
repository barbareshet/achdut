<?php


if ( is_home() && ! is_front_page() ) : ?>
<section id="hero" class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-wrap text-center">
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<?php else: ?>
<section id="hero" class="page-hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 title-wrap text-center">
				<h1 id="page-title">
					<?php the_title();?>
					<small class="under-title"><?php the_field('secondary_title');?></small>
				</h1>

			</div>
		</div>
	</div>
</section>
<?php endif; ?>