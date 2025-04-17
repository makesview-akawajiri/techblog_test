<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/commerce/template3/commerce.css">

<div class="page_commerce_main">
	<div class="wrap">
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
	<div class="page_commerce">
		<div class="common_page_wrap">
			<section class="commerce_cont_sec">
				<div class="wrap">
					<div class="inner">
						<div class="sec_title">
							<h1 class="title"><?php the_title(); ?></h1>
						</div>
						<div class="cont">
							<dl>
								<dt>
									<p class="title">会社名</p>
								</dt>
								<dd>
									<p class="text">〇〇〇〇〇〇〇〇会社</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">代表責任者氏名</p>
								</dt>
								<dd>
									<p class="text">代表太郎</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">所在地</p>
								</dt>
								<dd>
									<p class="text">〒530-0047<br>大阪府大阪市北区西天満0-0-0 <br class="sp">〇〇ビル〇階</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">電話番号</p>
								</dt>
								<dd>
									<p class="text">00-0000-0000</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">メールアドレス</p>
								</dt>
								<dd>
									<p class="text">info@example.jp</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">販売数量</p>
								</dt>
								<dd>
									<p class="text">各商品ページにてご確認ください。</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">申し込み有効期限</p>
								</dt>
								<dd>
									<p class="text">注文確定後のキャンセルは承っておりません。<br>確定前に今一度内容をご確認いただきご注文をお願いいたします。</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">引き渡し時期</p>
								</dt>
								<dd>
									<p class="text">ご注文確定後⚪︎営業日発送いたします。</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">商品代金以外の料金の説明</p>
								</dt>
								<dd>
									<p class="text">送料・クール料金はお客様負担にてお願いいたします。<br>消費税は全て商品代金(税込価格)に含んで表示しています。</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">お支払い方法</p>
								</dt>
								<dd>
									<p class="text">クレジットカード（VISA・MASTER・JCB・DINERS・AMEX）</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">返品期限</p>
								</dt>
								<dd>
									<p class="text">商品到着後3日以内とさせていただきます。</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">返品送料</p>
								</dt>
								<dd>
									<p class="text">不良品交換、誤品配送交換は当店負担とさせていただきます。</p>
								</dd>
							</dl>
							<dl>
								<dt>
									<p class="title">配送方法・送料について</p>
								</dt>
								<dd>
									<p class="text">ヤマト運輸クール宅急便にて発送しております。</p>
									<div class="price_table js_scrollable">
										<table>
											<thead>
												<tr>
													<th>地域</th>
													<th>都道府県</th>
													<th><span class="small">クール便60サイズ<br>（冷蔵・冷凍）</span></th>
													<th><span class="small">クール便80サイズ<br>（冷蔵・冷凍）</span></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>北海道</td>
													<td>北海道</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>北東北</td>
													<td>青森・秋田・岩手</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>南北東</td>
													<td>宮城・山形・福島</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>関東</td>
													<td>東京・千葉・埼玉・神奈川・群馬・栃木・茨城・山梨</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>北信越</td>
													<td>長野・新潟・富山・石川・福井</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>中部</td>
													<td>静岡・愛知・岐阜・三重</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>関西</td>
													<td>大阪・京都・滋賀・奈良・兵庫・和歌山</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>中国</td>
													<td>岡山・広島・山口・鳥取・島根</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>四国</td>
													<td>香川・徳島・高知・愛媛</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>九州</td>
													<td>福岡・佐賀・長崎・熊本・大分・宮崎・鹿児島</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
												<tr>
													<td>沖縄</td>
													<td>沖縄</td>
													<td class="price">¥1,830</td>
													<td class="price">¥1,830</td>
												</tr>
											</tbody>
										</table>
									</div>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>

<script>
	$(function() {
		new ScrollHint('.js_scrollable', {
			i18n: {
				scrollable: ''
			}
		});
	});
</script>