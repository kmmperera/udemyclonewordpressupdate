<?php get_header();?>

<section class="postsection">
<div class="postcontatentwrapper">
	
<h1 class="ewt-page-title"><?php the_title();?></h1>

			<?php if(has_post_thumbnail()):?>
				<div class="teacher-thumbnail">
					
						<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
					
				</div>
			<?php endif;?>
<div class="teacher-content-div">

	<div class="teacher-content-wrapper description-text-wrapper">
		<?php if( have_posts() ): while( have_posts() ): the_post();?>

			<?php the_content();?>

		<?php endwhile; else: endif;?>

	</div>
</div>		

</div>
</section>
				
<?php get_footer();?>