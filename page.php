<?php 
get_template_part('/inc/headersingle');
?>

<section class="mm text-center">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>   
<div class="title p-4">
    <h2><?php the_title();?></h2>
</div>
<div class="img p-4">
<?php the_post_thumbnail()?>
</div>
<div class="content p-4 text-justify">
<?php the_content()?>
</div>
	<!-- do stuff ... -->
	<?php endwhile; ?>
<?php endif; ?>
</section>