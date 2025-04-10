<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/single_staff/template1/staff.css">

<?php
get_template_part('inc/common_fv', null, array(
	'title' => get_the_title(),
));
?>

<main id="main" class="page_main">
	<div class="single_staff">
		<div class="common_page_wrap">
			<div class="intro_sec">
				<div class="wrap">
					<div class="text_box">
						<?php $introduction = get_field('introduction'); ?>
						<p class="title"><?= $introduction['title']; ?></p>
						<p class="text"><?= $introduction['text']; ?></p>
					</div>
				</div>
			</div>

			<div class="cont_sec">
				<?php $detail = get_field('detail'); ?>
				<?php foreach ($detail as $val) : ?>
					<div class="item">
						<div class="img">
							<img src="<?= $val['img']; ?>" alt="">
						</div>
						<div class="text_box">
							<p class="title"><?= $val['title']; ?></p>
							<p class="text"><?= $val['text']; ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="career_sec">
				<div class="wrap">
					<div class="inner">
						<p class="sec_title">経歴</p>
						<div class="list">
							<ul>
								<?php $career = get_field('career'); ?>
								<?php foreach ($career as $val) : ?>
									<li>
										<p class="date"><?= $val['date']; ?></p>
										<p class="text"><?= $val['text']; ?></p>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>