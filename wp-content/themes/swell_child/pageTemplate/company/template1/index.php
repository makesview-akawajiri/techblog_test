<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/company/template1/company.css">

<div class="page_company_main">
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
	<div class="page_company">
		<div class="common_page_wrap">
			<section class="company_profile_sec">
				<div class="wrap">
					<div class="cont">
						<dl>
							<dt>会社名</dt>
							<dd>株式会社〇〇〇〇</dd>
						</dl>
						<dl>
							<dt>住所</dt>
							<dd>〒530-0047<br>大阪府大阪市北区西天満0-0-0 〇〇ビル〇階</dd>
						</dl>
						<dl>
							<dt>TEL</dt>
							<dd>00-0000-0000</dd>
						</dl>
						<dl>
							<dt>FAX</dt>
							<dd>00-0000-0000</dd>
						</dl>
						<dl>
							<dt>代表者</dt>
							<dd>代表太郎</dd>
						</dl>
						<dl>
							<dt>設立</dt>
							<dd>2024年9月</dd>
						</dl>
						<dl>
							<dt>資本金</dt>
							<dd>0,000万円</dd>
						</dl>
						<dl>
							<dt>事業内容</dt>
							<dd>
								ホームページ制作事業<br>
								ブライダル事業<br>
								飲食事業<br>
								不動産事業<br>
								建設事業<br>
								システム開発事業<br>
								コンサルティング事業<br>
								イベント事業
							</dd>
						</dl>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>