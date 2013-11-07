<?php get_header(); ?>


<div id="content">
				<h2>Hasil Pencarian : <?php echo single_cat_title(); ?></h2>	

	<?php if (have_posts()) : ?>
		<!--the loop-->
		<?php while (have_posts()) : the_post(); ?>
                
			<!--post title as a link-->
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<div class="storycontent">
				<?php the_content(__('(selanjutnya...)')); ?>
			</div>
			<div class="meta"><?php _e("Kategori :"); ?> <?php the_category(',') ?> &#8212; <?php the_tags(__('Tags: '), ', ', ' &#8212; '); ?> <?php the_author() ?> @ <?php the_time() ?> <?php edit_post_link(__('Ubah')); ?></div>
			<div class="feedback">
				<?php wp_link_pages(); ?>
				<?php comments_popup_link(__('Belum ada komentar'), __('Ada seseorang yang berkomentar'), __('Ada % komentar')); ?>
			</div>
			</div>
		    <!--end of one post-->
		    <p>&nbsp;</p>

		<?php endwhile; ?>

		<!--navigation-->
               
		
	<!--do not delete-->
	<?php else : ?>

		Not Found
		Sorry, but you are looking for something that isn't here.
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <!--do not delete-->
	<?php endif; ?>

<!--index.php end-->

</div>

 <div id="navigation"><?php next_posts_link('More &raquo; ') ?> <?php previous_posts_link('&laquo; Back') ?></div>

<!--include footer-->
<?php get_footer(); ?>
