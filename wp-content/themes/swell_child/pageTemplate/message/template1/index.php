<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/message/template1/message.css">

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
	<div class="page_message">
		<div class="common_page_wrap">
			<section class="message_cont_sec">
				<div class="wrap">
					<div class="top_box">
						<h2 class="title">メッセージなどのタイトル<br>メッセージなどのタイトルが入りますメッセージなどのタイトルが入ります</h2>
						<p class="en">Message</p>
					</div>
					<div class="cont">
						<div class="img_box">
							<div class="img">
								<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
							</div>
							<div class="name_box">
								<p class="position">代表取締役</p>
								<p class="name">名前 太郎</p>
								<p class="en_name">Taro Namae</p>
							</div>
						</div>
						<div class="text_box">
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>