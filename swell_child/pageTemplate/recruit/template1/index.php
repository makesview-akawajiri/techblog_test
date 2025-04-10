<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/recruit/template1/recruit.css">

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
	<div class="page_recruit">
		<div class="common_page_wrap">
			<section class="recruit_resources_sec">
				<div class="wrap">
					<div class="inner">
						<div class="common_sec_title">
							<h2 class="title">求める人材</h2>
						</div>
						<div class="cont">
							<p class="lead_text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
							<div class="list">
								<ul>
									<li>
										<h3 class="title">1.タイトルが入ります</h3>
										<div class="textarea">
											<p class="text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
										</div>
									</li>
									<li>
										<h3 class="title">2.タイトルが入ります</h3>
										<div class="textarea">
											<p class="text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
										</div>
									</li>
									<li>
										<h3 class="title">3.タイトルが入ります</h3>
										<div class="textarea">
											<p class="text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="recruit_desc_sec">
				<div class="wrap">
					<div class="nav_box">
						<ul>
							<li>
								<a href="#job1">職種が入ります</a>
							</li>
							<li>
								<a href="#job2">職種が入ります</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="#job3">職種が入ります</a>
							</li>
							<li>
								<a href="#job4">職種が入ります</a>
							</li>
						</ul>
					</div>
					<div class="inner">
						<div class="common_sec_title">
							<h2 class="title">募集要項</h2>
						</div>
						<div class="cont">
							<div id="job1" class="item">
								<h3 class="title">職種が入ります</h3>
								<div class="table_box">
									<table>
										<tbody>
											<tr>
												<th>給与</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>勤務地</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>雇用形態</th>
												<td>正社員</td>
											</tr>
											<tr>
												<th>勤務体系</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>試用期間</th>
												<td>ここにテキストが入ります。</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="job2" class="item">
								<h3 class="title">職種が入ります</h3>
								<div class="table_box">
									<table>
										<tbody>
											<tr>
												<th>給与</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>勤務地</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>雇用形態</th>
												<td>正社員</td>
											</tr>
											<tr>
												<th>勤務体系</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>試用期間</th>
												<td>ここにテキストが入ります。</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="job3" class="item">
								<h3 class="title">職種が入ります</h3>
								<div class="table_box">
									<table>
										<tbody>
											<tr>
												<th>給与</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>勤務地</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>雇用形態</th>
												<td>正社員</td>
											</tr>
											<tr>
												<th>勤務体系</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>試用期間</th>
												<td>ここにテキストが入ります。</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="job4" class="item">
								<h3 class="title">職種が入ります</h3>
								<div class="table_box">
									<table>
										<tbody>
											<tr>
												<th>給与</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>勤務地</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>雇用形態</th>
												<td>正社員</td>
											</tr>
											<tr>
												<th>勤務体系</th>
												<td>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</td>
											</tr>
											<tr>
												<th>試用期間</th>
												<td>ここにテキストが入ります。</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>