<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/shop/template3/shop.css">

<div class="page_shop_main">
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
	<div class="page_shop">
		<div class="common_page_wrap">
			<section class="shop_cont_sec">
				<div class="wrap">
					<div class="list">
						<ul>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">ここに会社名と店名が入ります。</h2>
									<p class="address">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">ここに会社名と店名が入ります。</h2>
									<p class="address">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">ここに会社名と店名が入ります。</h2>
									<p class="address">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">ここに会社名と店名が入ります。</h2>
									<p class="address">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">ここに会社名と店名が入ります。</h2>
									<p class="address">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
							<li>
								<div class="img">
									<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
								</div>
								<div class="text_box">
									<h2 class="title">ここに会社名と店名が入ります。</h2>
									<p class="address">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>