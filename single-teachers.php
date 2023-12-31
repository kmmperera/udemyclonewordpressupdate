<?php get_header();?>

<section class="postsection">
<div class="postcontatentwrapper">
	
<h1><?php the_title();?></h1>

			<?php if(has_post_thumbnail()):?>
				<div class="">
					<a href="<?php the_post_thumbnail_url('blog-large');?>">
						<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
					</a>
				</div>
			<?php endif;?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

	<?php the_content();?>

<?php endwhile; else: endif;?>

</div>
</section>
				
<?php get_footer();?>