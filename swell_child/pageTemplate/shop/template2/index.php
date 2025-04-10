<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/shop/template2/shop.css">

<div class="page_shop_main">
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
	<div class="page_shop">
		<div class="common_page_wrap">
			<section class="shop_cont_sec">
				<div class="wrap">
					<div class="list">
						<ul>
							<li>
								<div class="inbox">
									<div class="img">
										<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
									</div>
									<div class="text_box">
										<div class="title_box">
											<p class="company">ここに会社名</p>
											<h2 class="shop">店舗名が入ります。</h2>
										</div>
										<div class="address pc">
											<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
										</div>
										<p class="tel">
											<a href="tel:00-0000-0000">Tel：<span class="num">00-0000-0000</span></a>
										</p>
									</div>
								</div>
								<div class="address sp">
									<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="inbox">
									<div class="img">
										<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
									</div>
									<div class="text_box">
										<div class="title_box">
											<p class="company">ここに会社名</p>
											<h2 class="shop">店舗名が入ります。</h2>
										</div>
										<div class="address pc">
											<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
										</div>
										<p class="tel">
											<a href="tel:00-0000-0000">Tel：<span class="num">00-0000-0000</span></a>
										</p>
									</div>
								</div>
								<div class="address sp">
									<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="inbox">
									<div class="img">
										<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
									</div>
									<div class="text_box">
										<div class="title_box">
											<p class="company">ここに会社名</p>
											<h2 class="shop">店舗名が入ります。</h2>
										</div>
										<div class="address pc">
											<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
										</div>
										<p class="tel">
											<a href="tel:00-0000-0000">Tel：<span class="num">00-0000-0000</span></a>
										</p>
									</div>
								</div>
								<div class="address sp">
									<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="inbox">
									<div class="img">
										<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
									</div>
									<div class="text_box">
										<div class="title_box">
											<p class="company">ここに会社名</p>
											<h2 class="shop">店舗名が入ります。</h2>
										</div>
										<div class="address pc">
											<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
										</div>
										<p class="tel">
											<a href="tel:00-0000-0000">Tel：<span class="num">00-0000-0000</span></a>
										</p>
									</div>
								</div>
								<div class="address sp">
									<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>