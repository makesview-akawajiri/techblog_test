<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/staff/template3/staff.css">

<div class="page_staff_main">
	<div class="wrap">
		<div class="title_box">
			<h1 class="title"><?php the_archive_title(); ?></h1>
		</div>
	</div>
</div>

<div class="breadcrumb">
	<div class="wrap">
		<div vocab="http://schema.org/" typeof="BreadcrumbList">
			<?php
			if (function_exists('bcn_display')) {
				bcn_display();
			}
			?>
		</div>
	</div>
</div>

<main id="main" class="page_main">
	<div class="page_staff">
		<div class="common_page_wrap">
			<div class="staff_cont_sec">
				<div class="wrap">
					<div class="list">
						<?php
						$args = array(
							'post_type' => 'staff',
							'posts_per_page' => -1,
						);
						$my_query = new WP_Query($args);
						?>
						<ul>
							<?php if ($my_query->have_posts()) : ?>
								<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li>
										<a href="<?php the_permalink(); ?>">
											<div class="img">
												<img src="<?php the_field('main_img'); ?>" alt="">
											</div>
											<div class="text_box">
												<div class="inbox">
													<div class="name_box">
														<p class="name"><?php the_title(); ?></p>
														<p class="en_name"><?php the_field('en_name'); ?></p>
													</div>
													<div class="arrow"></div>
												</div>
												<div class="textarea">
													<p class="text"><?php the_field('date'); ?>入社</p>
													<p class="text"><?php the_field('position'); ?></p>
												</div>
											</div>
										</a>
									</li>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<?php get_template_part('template-parts/content/content', 'none'); ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>