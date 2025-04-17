<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/service/template3/service.css">

<div class="page_service_main">
	<div class="wrap">
		<div class="title_box">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
		<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
			<?php
			if (function_exists('bcn_display')) {
				bcn_display();
			}
			?>
		</div>
	</div>
</div>

<main id="main" class="page_main">
	<div class="page_service">
		<div class="common_page_wrap">
			<section class="service_cont_sec">
				<div class="wrap">
					<div class="inner">
						<div class="nav_box">
							<ul>
								<li>
									<a href="#service1">サービス名</a>
								</li>
								<li>
									<a href="#service2">サービス名</a>
								</li>
								<li>
									<a href="#service3">サービス名</a>
								</li>
							</ul>
						</div>
						<div class="cont">
							<div id="service1" class="item">
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
							<div id="service2" class="item">
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
							<div id="service3" class="item">
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
				</div>
			</section>
		</div>
	</div>
</main>