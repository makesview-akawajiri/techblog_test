<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/service/template1/service.css">

<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
$slug = str_replace('_', ' ', $slug);

get_template_part('inc/common_fv', null, array(
	'title' => get_the_title(),
	'en_title' => $slug
));
?>

<main id="main" class="page_main">
	<div class="page_service">
		<div class="common_page_wrap">
			<section class="service_cont_sec">
				<div class="wrap">
					<div class="list">
						<ul>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">サービス名</h2>
									<p class="text">
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。<br>
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。
									</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">サービス名</h2>
									<p class="text">
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。<br>
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。
									</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">サービス名</h2>
									<p class="text">
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。<br>
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。
									</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">サービス名</h2>
									<p class="text">
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。<br>
										ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。ここにサービスの説明が入ります。
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>