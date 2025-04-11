<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/message/template2/message.css">

<div class="page_message_main">
	<div class="wrap">
		<div class="title_box">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
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
	<div class="page_message">
		<div class="common_page_wrap">
			<section class="message_cont_sec">
				<div class="wrap">
					<div class="main_box">
						<div class="img">
							<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
						</div>
						<div class="text_box">
							<div class="title_box">
								<h2 class="title">メッセージのタイトルが入ります。<br>メッセージのタイトルが入ります。</h2>
								<p class="en">Message</p>
							</div>
							<div class="info">
								<p class="position">代表取締役</p>
								<div class="name_box">
									<p class="name">名前 太郎</p>
									<p class="en_name">Taro Namae</p>
								</div>
							</div>
						</div>
					</div>
					<div class="detail">
						<div class="text_box">
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
						</div>
						<div class="name_box">
							<p class="position">株式会社〇〇 代表取締役</p>
							<p class="name">名前 太郎</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>