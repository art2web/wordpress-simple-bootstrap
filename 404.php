<?php get_header(); ?>

<div id="content" class="row">

	<div id="main" class="col-sm-12" role="main">

		<article id="post-not-found" class="block">
		
			<section class="post_content">
				
				<p>
					<?php _e("Page not found", "default"); ?>
				</p>
				<?php get_search_form(); ?>
		
			</section>
		
		</article>

	</div>

</div>

<?php get_footer(); ?>