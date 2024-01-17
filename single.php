<?php get_header();?>

<?php 
$cat_id_single=	get_the_category(get_the_ID());
$thiscat=$cat_id_single[0]->slug;
//var_dump($cat_id_single[0]);
//var_dump($cat_id_single);

?>

		<?php
			$cattype="";
			if(strpos($thiscat, 'timetables')!==FALSE){
				$cattype="timetables";
			}
			if(strpos($thiscat, 'books') !== FALSE){
				$cattype="books";
			}
			if(strpos($thiscat, 'teachers') !== FALSE){
				$cattype="teachers";
			}
		?>

		<?php
			$degreetype="";
			if(strpos($thiscat, 'art')!==FALSE){
				$degreetype="art";
			}
			if(strpos($thiscat, 'science-general') !== FALSE){
				$degreetype="science-general";
			}
			if(strpos($thiscat, 'science-physiotheraphy') !== FALSE){
				$degreetype="science-physiotheraphy";
			}
			if(strpos($thiscat, 'science-occupational-theraphy') !== FALSE){
				$degreetype="science-occupational-theraphy";
			}
			if(strpos($thiscat, 'commerce') !== FALSE){
				$degreetype="commerce";
			} 
			if(strpos($thiscat, 'business') !== FALSE){
				$degreetype="business";
			}
			
		?>

<section class=" <?php echo 'postsection '.$cattype ?> ">
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
			<?php if($cattype === "teachers"): ?>
			<h2 class="time-table-widget-heading-h2">කාල සටහන්</h2>
			<div class="whatsapp-wiges-wrapper justify-center time-tables-widget-wrapper">

				

				<?php 
				$widgetareaname='ewt-'.$degreetype.'-time-table-buttons-sidebar-widget';
				if (is_active_sidebar($widgetareaname)) : ?>
						
						<?php dynamic_sidebar($widgetareaname); ?>

				<?php endif; ?>

			</div>
			<?php endif;?>

	</div>
</section>
				
<?php get_footer();?>