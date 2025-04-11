<link rel="stylesheet" href="<?= get_theme_path(); ?>/pageTemplate/message/template3/message.css">

<div class="page_message_main">
	<div class="wrap mid">
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
					<div class="cont">
						<div class="text_box">
							<div class="title_box">
								<h2 class="title">メッセージなどのタイトルが入ります<br>メッセージなどのタイトルが入ります。</h2>
							</div>
							<div class="textarea">
								<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
								<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
								<p class="text">ここに代表挨拶の説明文が入ります。ここに代表挨拶の説明文が入ります。</p>
							</div>
							<div class="name_box">
								<p class="position">代表取締役</p>
								<p class="name">名前 太郎</p>
							</div>
						</div>
						<div class="img">
							<img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
							<p class="en_name f_ant">Namae Taro</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>