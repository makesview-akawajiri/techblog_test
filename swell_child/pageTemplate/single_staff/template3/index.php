<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/single_staff/template3/staff.css">

<div class="single_staff_main">
	<div class="wrap">
		<div class="title_box">
			<h1 class="title"><?php the_title(); ?></h1>
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
	<div class="single_staff">
		<div class="common_page_wrap">
			<div class="about_sec">
				<div class="wrap">
					<div class="inner">
						<div class="img">
							<img src="<?php the_field('main_img'); ?>" alt="">
						</div>
						<div class="text_box">
							<div class="name_box">
								<p class="name"><?php the_title(); ?></p>
								<p class="en_name"><?php the_field('en_name'); ?></p>
							</div>
							<div class="info">
								<p class="text"><?php the_field('date'); ?>入社</p>
								<p class="text"><?php the_field('position'); ?></p>
							</div>
							<div class="catch">
								<p class="text"><?php the_field('catch'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="cont_sec">
				<div class="wrap">
					<?php $detail = get_field('detail'); ?>
					<?php foreach ($detail as $val) : ?>
						<div class="item">
							<div class="text_box">
								<p class="title"><?= $val['title']; ?></p>
								<p class="text"><?= $val['text']; ?></p>
							</div>
							<div class="img">
								<img src="<?= $val['img']; ?>" alt="">
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</main>