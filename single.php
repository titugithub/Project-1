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
<?php wp_link_pages(  ); ?>
</div>
	<!-- do stuff ... -->
	<?php endwhile; ?>
<?php endif; ?>

</section>



<div class="comment-fromm mm">
<div class="comments">
    <?php
        if(comments_open()) {
            comments_template();
			
        }
    ?>
</div>
</div>

<div class="pagination mm">
	<?php previous_post_link();?>
	<?php next_post_link(); ?>
</div>



 








<?php get_footer()?>