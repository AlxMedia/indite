<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	
	<div class="post-wrapper group">
		
		<div class="entry-media">
			<?php if ( get_theme_mod('post-formats-enable','off') == 'on' ) : ?>
				<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
			<?php else: ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>">
						<div class="image-container">
							<?php the_post_thumbnail('indite-large'); ?>
							<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
							<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
							<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
						</div>
					</a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		
		<header class="entry-header group">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="entry-meta">
				<span class="entry-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></span>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
					<span class="entry-comments"><i class="far fa-comment"></i><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
				<?php endif; ?>
				<span class="entry-author"><i class="far fa-user"></i><?php the_author_posts_link(); ?></span>
				<span class="entry-category"><?php the_category(' '); ?></span>
			</div>
		</header>
		
		<div class="entry-content">
			<div class="entry themeform">
				
				<?php if ( get_theme_mod('excerpt-enable','off') == 'on' ) : ?>
					
					<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
						<?php the_excerpt(); ?>
						<a class="more-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Continue reading...','indite'); ?></a>
					<?php endif; ?>
					
				<?php else: ?>
				
					<?php the_content(esc_html__('Continue reading...','indite')); ?>
				
				<?php endif; ?>
				
			</div>
		</div>
	</div>

</article><!--/.post-->	