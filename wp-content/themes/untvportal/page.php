<?php get_header(); ?>


			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>asdfasdf<?php

					// Include the page content template.
					get_template_part( 'content', 'page' );
				endwhile;
			?>



<?php get_footer(); ?>
