<?php get_header(); ?>
<!--page.php-->

<div id="content_page">

    <!--loop-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
                 <!--post title-->
		<h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
		<div class="postspace2">
	</div>	
                              <!--post with more link -->
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

	                       <!--if you paginate pages-->
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
	<!--end of post and end of loop-->
	  <?php endwhile; endif; ?>

         <!--edit link-->
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
</div>

<!--page.php end-->

<!--include footer-->
<?php get_footer(); ?>