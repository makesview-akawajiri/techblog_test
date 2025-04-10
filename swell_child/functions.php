<?php

/* 子テーマのfunctions.phpは、親テーマのfunctions.phpより先に読み込まれることに注意してください。 */


/**
 * 親テーマのfunctions.phpのあとで読み込みたいコードはこの中に。
 */
// add_filter('after_setup_theme', function(){
// }, 11);


/**
 * 子テーマでのファイルの読み込み
 */
add_action('wp_enqueue_scripts', function () {

	$timestamp = date('Ymdgis', filemtime(get_stylesheet_directory() . '/style.css'));
	wp_enqueue_style('child_style', get_stylesheet_directory_uri() . '/style.css', [], $timestamp);

	/* その他の読み込みファイルはこの下に記述 */
}, 11);

//スマートフォンの判別
function wp_is_phone()
{
	$ua = $_SERVER['HTTP_USER_AGENT'];
	if (
		strpos($ua, 'iPhone')                            // iPhone
		|| strpos($ua, 'iPod')                              // iPod touch
		|| (strpos($ua, 'Android') && strpos($ua, 'Mobile')) // Android搭載スマホ
		|| (strpos($ua, 'Windows') && strpos($ua, 'Mobile')) // Windows Phone
		|| (strpos($ua, 'Firefox') && strpos($ua, 'Mobile')) // firefox製ブラウザ
		|| strpos($ua, 'Opera Mini')                        // Androidで人気のブラウザ
		|| strpos($ua, 'Opera Mobi')                        // Androidで人気のブラウザ
		|| strpos($ua, 'webmate')                           // その他の Other iPhone browser
		|| strpos($ua, 'incognito')                      // その他の iPhone browser
		|| strpos($ua, 'Mobile')
	) {
		return true;
	} else {
		return false;
	}
}

// パスの取得
function get_theme_path()
{
	$theme_path = get_stylesheet_directory_uri();
	return $theme_path;
}

/* 管理画面にPV数を表示 */
if (function_exists('wpp_get_views')) {

	// カラムを追加
	add_filter('manage_posts_columns', function ($columns) {
		$columns['view'] = "閲覧数"; // 閲覧数カラムを追加
		// 閲覧数カラムを最後に移動
		$new_columns = [];
		foreach ($columns as $key => $value) {
			if ($key === 'view') {
				continue; // 一旦スキップして最後に追加
			}
			$new_columns[$key] = $value;
		}
		$new_columns['view'] = "閲覧数"; // 一番最後に追加
		return $new_columns;
	});

	// カラムにデータを表示
	add_action('manage_posts_custom_column', function ($column_name, $post_id) {
		if ($column_name == 'view') {
			echo '日：', wpp_get_views($post_id, 'daily');
			echo "<br />";
			echo '週：', wpp_get_views($post_id, 'weekly');
			echo "<br />";
			echo '月：', wpp_get_views($post_id, 'monthly');
			echo "<br />";
			echo '全：', wpp_get_views($post_id, 'all');
		}
	}, 10, 2);
}
