<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/service/template2/service.css">

<div class="page_service_main">
	<div class="breadcrumb">
		<div class="wrap lr">
			<div vocab="http://schema.org/" typeof="BreadcrumbList">
				<?php
				if (function_exists('bcn_display')) {
					bcn_display();
				}
				?>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="title_box">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<main id="main" class="page_main">
	<div class="page_service">
		<div class="common_page_wrap">
			<section class="service_cont_sec">
				<div class="wrap lr">
					<div class="cont">
						<div class="item">
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
						</div>
						<div class="item">
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
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>