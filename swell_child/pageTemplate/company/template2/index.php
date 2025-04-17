<?php $page = get_post(get_the_ID()); ?>
<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/company/template2/company.css">

<div class="page_company_main"></div>

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

<main id="main" class="page_main">
	<div class="page_company">
		<div class="common_page_wrap">
			<section class="company_profile_sec">
				<div class="wrap">
					<div class="cont">
						<div class="title_box">
							<h1 class="title"><?php the_title(); ?></h1>
							<p class="sub_title"><?= $page->post_name; ?></p>
						</div>
						<div class="detail">
							<div class="item">
								<div class="inbox">
									<p class="head">会社名</p>
									<div class="text_area">
										<p class="text">株式会社〇〇〇〇</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inbox">
									<p class="head">住所</p>
									<div class="text_area">
										<p class="text">〒530-0047<br>大阪府大阪市北区西天満0-0-0 〇〇ビル〇階</p>
										<div class="pc">
											<div class="map">
												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d429.19981829395033!2d135.5086469594321!3d34.69425047821651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6dcfe730f3d%3A0x8e5dbb0aaa71088f!2z6L6w6YeO6KW_5aSp5rqA44OT44Or!5e0!3m2!1sja!2sjp!4v1727246343308!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>
										</div>
									</div>
								</div>
								<div class="sp">
									<div class="map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d429.19981829395033!2d135.5086469594321!3d34.69425047821651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6dcfe730f3d%3A0x8e5dbb0aaa71088f!2z6L6w6YeO6KW_5aSp5rqA44OT44Or!5e0!3m2!1sja!2sjp!4v1727246343308!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inbox">
									<p class="head">TEL</p>
									<div class="text_area">
										<p class="text">00-0000-0000</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inbox">
									<p class="head">FAX</p>
									<div class="text_area">
										<p class="text">00-0000-0000</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inbox">
									<p class="head">代表者</p>
									<div class="text_area">
										<p class="text">代表太郎</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inbox">
									<p class="head">設立</p>
									<div class="text_area">
										<p class="text">2024年9月</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inbox">
									<p class="head">資本金</p>
									<div class="text_area">
										<p class="text">0,000万円</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inbox">
									<p class="head">事業内容</p>
									<div class="text_area">
										<p class="text">
											ホームページ制作事業<br>
											ブライダル事業<br>
											飲食事業<br>
											不動産事業<br>
											建設事業<br>
											システム開発事業<br>
											コンサルティング事業<br>
											イベント事業
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>