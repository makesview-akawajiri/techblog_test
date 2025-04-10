<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/staff/template1/staff.css">

<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
$slug = str_replace('_', ' ', $slug);

get_template_part('inc/common_fv', null, array(
	'title' => get_the_archive_title(),
	'en_title' => $slug
));
?>

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
												<p class="name"><?php the_title(); ?></p>
												<p class="text"><?= get_field('introduction')['text']; ?></p>
												<button class="more">View more</button>
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