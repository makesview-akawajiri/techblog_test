<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/single_staff/template2/staff.css">

<div class="single_staff_main">
	<div class="inner">
		<div class="info">
			<div class="sub_box">
				<p class="text"><?php the_field('date'); ?>入社</p>
				<p class="text"><?php the_field('position'); ?></p>
			</div>
			<div class="name_box">
				<h1 class="name"><?php the_title(); ?></h1>
				<p class="en_name"><?php the_field('en_name'); ?></p>
			</div>
			<div class="textarea">
				<?php $introduction = get_field('introduction'); ?>
				<p class="text"><?= $introduction['text']; ?></p>
			</div>
			<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
				<?php
				if (function_exists('bcn_display')) {
					bcn_display();
				}
				?>
			</div>
		</div>
		<div class="img">
			<img src="<?php the_field('main_img'); ?>" alt="">
		</div>
	</div>
</div>

<main id="main" class="page_main">
	<div class="single_staff">
		<div class="common_page_wrap">
			<div class="cont_sec">
				<div class="wrap">
					<?php $detail = get_field('detail'); ?>
					<?php foreach ($detail as $val) : ?>
						<div class="item">
							<div class="img">
								<img src="<?= $val['img']; ?>" alt="">
							</div>
							<div class="text_box">
								<p class="text"><?= $val['text']; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</main>