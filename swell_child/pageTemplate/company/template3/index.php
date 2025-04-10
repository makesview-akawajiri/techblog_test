<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/company/template3/company.css">

<div class="page_company_main">
	<div class="wrap lr">
		<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
			<?php
			if (function_exists('bcn_display')) {
				bcn_display();
			}
			?>
		</div>
		<div class="title_box">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<main id="main" class="page_main">
	<div class="page_company">
		<div class="common_page_wrap">
			<section class="company_profile_sec">
				<div class="wrap">
					<div class="cont">
						<table>
							<tbody>
								<tr>
									<th>会社名</th>
									<td>株式会社〇〇〇〇</td>
								</tr>
								<tr>
									<th>住所</th>
									<td>〒530-0047<br>大阪府大阪市北区西天満0-0-0 〇〇ビル〇階</td>
								</tr>
								<tr>
									<th>TEL</th>
									<td>00-0000-0000</td>
								</tr>
								<tr>
									<th>FAX</th>
									<td>00-0000-0000</td>
								</tr>
								<tr>
									<th>代表者</th>
									<td>代表太郎</td>
								</tr>
								<tr>
									<th>設立</th>
									<td>2024年9月</td>
								</tr>
								<tr>
									<th>資本金</th>
									<td>0,000万円</td>
								</tr>
								<tr>
									<th>事業内容</th>
									<td>
										ホームページ制作事業<br>
										ブライダル事業<br>
										飲食事業<br>
										不動産事業<br>
										建設事業<br>
										システム開発事業<br>
										コンサルティング事業<br>
										イベント事業
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>