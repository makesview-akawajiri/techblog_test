<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/shop/template1/shop.css">

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
	<div class="page_shop">
		<div class="common_page_wrap">
			<section class="shop_cont_sec">
				<div class="wrap">
					<div class="cont">
						<div class="item">
							<div class="img">
								<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
							</div>
							<div class="text_box">
								<div class="title_box">
									<h2 class="title">店舗名が入ります。</h2>
								</div>
								<div class="access">
									<div class="inbox">
										<div class="icon">
											<svg width="14" height="20" viewBox="0 0 14 20">
												<g transform="translate(-83.644)">
													<path d="M90.644,0a6.87,6.87,0,0,0-7,6.733c0,3.8,1.956,4.6,4.118,7.129A12.181,12.181,0,0,1,90.644,20a12.181,12.181,0,0,1,2.882-6.139c2.162-2.525,4.118-3.333,4.118-7.129A6.87,6.87,0,0,0,90.644,0Zm0,9.059a2.374,2.374,0,0,1-2.419-2.327,2.421,2.421,0,0,1,4.838,0A2.374,2.374,0,0,1,90.644,9.059Z" />
												</g>
											</svg>
										</div>
										<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。ここに住所が入ります。</p>
									</div>
									<div class="inbox">
										<div class="icon">
											<svg width="13.724" height="20" viewBox="0 0 13.724 20">
												<g transform="translate(-80.336)">
													<path d="M94.06,13.939V5.75a3.4,3.4,0,0,0-3.4-3.4H89.087L89.275.681h.344a.889.889,0,0,1,.819.543l.627-.265h0A1.57,1.57,0,0,0,89.619,0H84.776A1.57,1.57,0,0,0,83.33.959l.627.265a.889.889,0,0,1,.819-.543h.345l.188,1.672H83.732a3.4,3.4,0,0,0-3.4,3.4v8.189a2.891,2.891,0,0,0,2.391,2.843L80.6,20h1.894l.874-1.321h7.667L91.906,20H93.8l-2.13-3.218A2.891,2.891,0,0,0,94.06,13.939ZM88.589.681,88.4,2.354H85.994L85.806.682Zm-4.332,3.2h5.882v.98H84.257Zm-1.77,3.168a.772.772,0,0,1,.772-.772h7.878a.773.773,0,0,1,.772.772V9.624a.772.772,0,0,1-.772.772H83.259a.772.772,0,0,1-.772-.772V7.047Zm.735,7.738a.9.9,0,1,1,.9-.9A.9.9,0,0,1,83.223,14.785Zm.711,3.035.658-.995H89.8l.658.995Zm7.24-3.035a.9.9,0,1,1,.9-.9A.9.9,0,0,1,91.173,14.785Z" />
												</g>
											</svg>
										</div>
										<p class="text">ここにアクセスが入ります。ここにアクセスが入ります。<br>ここにアクセスが入ります。</p>
									</div>
								</div>
								<div class="tel_box">
									<p class="text">
										<a href="tel:00-0000-0000">
											Tel：<span class="num">00-0000-0000</span>
										</a>
									</p>
									<p class="text fax">
										Fax：<span class="num">00-0000-0000</span>
									</p>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="img">
								<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
							</div>
							<div class="text_box">
								<div class="title_box">
									<h2 class="title">店舗名が入ります。</h2>
								</div>
								<div class="access">
									<div class="inbox">
										<div class="icon">
											<svg width="14" height="20" viewBox="0 0 14 20">
												<g transform="translate(-83.644)">
													<path d="M90.644,0a6.87,6.87,0,0,0-7,6.733c0,3.8,1.956,4.6,4.118,7.129A12.181,12.181,0,0,1,90.644,20a12.181,12.181,0,0,1,2.882-6.139c2.162-2.525,4.118-3.333,4.118-7.129A6.87,6.87,0,0,0,90.644,0Zm0,9.059a2.374,2.374,0,0,1-2.419-2.327,2.421,2.421,0,0,1,4.838,0A2.374,2.374,0,0,1,90.644,9.059Z" />
												</g>
											</svg>
										</div>
										<p class="text">〒000-0000<br>ここに住所が入ります。ここに住所が入ります。ここに住所が入ります。</p>
									</div>
									<div class="inbox">
										<div class="icon">
											<svg width="13.724" height="20" viewBox="0 0 13.724 20">
												<g transform="translate(-80.336)">
													<path d="M94.06,13.939V5.75a3.4,3.4,0,0,0-3.4-3.4H89.087L89.275.681h.344a.889.889,0,0,1,.819.543l.627-.265h0A1.57,1.57,0,0,0,89.619,0H84.776A1.57,1.57,0,0,0,83.33.959l.627.265a.889.889,0,0,1,.819-.543h.345l.188,1.672H83.732a3.4,3.4,0,0,0-3.4,3.4v8.189a2.891,2.891,0,0,0,2.391,2.843L80.6,20h1.894l.874-1.321h7.667L91.906,20H93.8l-2.13-3.218A2.891,2.891,0,0,0,94.06,13.939ZM88.589.681,88.4,2.354H85.994L85.806.682Zm-4.332,3.2h5.882v.98H84.257Zm-1.77,3.168a.772.772,0,0,1,.772-.772h7.878a.773.773,0,0,1,.772.772V9.624a.772.772,0,0,1-.772.772H83.259a.772.772,0,0,1-.772-.772V7.047Zm.735,7.738a.9.9,0,1,1,.9-.9A.9.9,0,0,1,83.223,14.785Zm.711,3.035.658-.995H89.8l.658.995Zm7.24-3.035a.9.9,0,1,1,.9-.9A.9.9,0,0,1,91.173,14.785Z" />
												</g>
											</svg>
										</div>
										<p class="text">ここにアクセスが入ります。ここにアクセスが入ります。<br>ここにアクセスが入ります。</p>
									</div>
								</div>
								<div class="tel_box">
									<p class="text">
										<a href="tel:00-0000-0000">
											Tel：<span class="num">00-0000-0000</span>
										</a>
									</p>
									<p class="text fax">
										Fax：<span class="num">00-0000-0000</span>
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