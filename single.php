<?php get_header(); ?>


<div id="content">
<!--single.php-->
	
<!--loop-->			
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<!--post title-->
			<h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>

<div class="postspace2">
	</div>			
<!--content with more link-->
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	
                       <!--for paginate posts-->
			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

		<div id="tags">Taken by <?php the_author(); ?> &raquo; Posted on <?php the_time('F j, Y'); ?> &raquo; Filed in <?php the_category(', ') ?> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">Link</a> <?php edit_post_link('Edit'); ?> </div>
				
<div class="postspace">
	</div>

				<!--all options over and out-->

<div id="navigation">    <?php next_post_link('&laquo; %link |') ?> <a href="<?php bloginfo('url'); ?>">Home</a> <?php previous_post_link('| %link  &raquo;') ?> </div>

<!--put comments code here-->
<div id="comments">
	<?php comments_template(); // include comments template ?>
</div>
        <!--do not delete-->
	<?php endwhile; else: ?>
	
	Sorry, no posts matched your criteria.

<!--do not delete-->
<?php endif; ?>
	
<!--single.php end-->
</div>


<!--include footer-->
<?php get_footer(); ?>