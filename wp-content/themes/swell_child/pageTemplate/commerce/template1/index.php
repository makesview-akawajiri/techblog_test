<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/commerce/template1/commerce.css">

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
	<div class="page_commerce">
		<div class="common_page_wrap">
			<div class="commerce_cont_sec">
				<div class="wrap">
					<div class="cont">
						<table>
							<tbody>
								<tr>
									<th>会社名</th>
									<td>
										<p class="text">〇〇〇〇〇〇〇〇会社</p>
									</td>
								</tr>
								<tr>
									<th>代表責任者<br class="sp">氏名</th>
									<td>
										<p class="text">代表太郎</p>
									</td>
								</tr>
								<tr>
									<th>所在地</th>
									<td>
										<p class="text">〒530-0047<br>大阪府大阪市北区西天満0-0-0 〇〇ビル〇階</p>
									</td>
								</tr>
								<tr>
									<th>電話番号</th>
									<td>
										<p class="text">00-0000-0000</p>
									</td>
								</tr>
								<tr>
									<th>メール<br class="sp">アドレス</th>
									<td>
										<p class="text">info@example.jp</p>
									</td>
								</tr>
								<tr>
									<th>販売数量</th>
									<td>
										<p class="text">各商品ページにてご確認ください。</p>
									</td>
								</tr>
								<tr>
									<th>申し込み<br class="sp">有効期限</th>
									<td>
										<p class="text">注文確定後のキャンセルは承っておりません。<br>確定前に今一度内容をご確認いただきご注文をお願いいたします。</p>
									</td>
								</tr>
								<tr>
									<th>引き渡し時期</th>
									<td>
										<p class="text">ご注文確定後⚪︎営業日発送いたします。</p>
									</td>
								</tr>
								<tr>
									<th>商品代金以外<br class="sp">の料金の説明</th>
									<td>
										<p class="text">送料・クール料金はお客様負担にてお願いいたします。<br>消費税は全て商品代金(税込価格)に含んで表示しています。</p>
									</td>
								</tr>
								<tr>
									<th>お支払い方法</th>
									<td>
										<p class="text">クレジットカード（VISA・MASTER・JCB・DINERS・AMEX）</p>
									</td>
								</tr>
								<tr>
									<th>返品期限</th>
									<td>
										<p class="text">商品到着後3日以内とさせていただきます。</p>
									</td>
								</tr>
								<tr>
									<th>返品送料</th>
									<td>
										<p class="text">不良品交換、誤品配送交換は当店負担とさせていただきます。</p>
									</td>
								</tr>
								<tr>
									<th class="start">配送方法・<br class="sp">送料について</th>
									<td>
										<p class="text">ヤマト運輸クール宅急便にて発送しております。</p>
										<div class="price_table js_scrollable">
											<table>
												<tbody>
													<tr>
														<th>地域</th>
														<th>都道府県</th>
														<th><span class="small">クール便60サイズ<br>（冷蔵・冷凍）</span></th>
														<th><span class="small">クール便80サイズ<br>（冷蔵・冷凍）</span></th>
													</tr>
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
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
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