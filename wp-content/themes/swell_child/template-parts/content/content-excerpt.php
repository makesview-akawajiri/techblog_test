<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex pr'); ?>>
    <!-- <div class="img">
        <?php //the_post_thumbnail('thumbnail'); //アイキャッチ画像サイズの記述/medium/large/full/ ?>
    </div> -->
    <!-- 日付 -->
    <div class="date">
        <?php the_time('Y.m.d') ?>
    </div>
    <div class="content_area">
        <!-- タイトル -->
        <div class="ttl">
            <?php
            if (mb_strlen($post->post_title)>38) {
                $title= mb_substr($post->post_title, 0, 38) ;
                echo $title. '…' ;
            } else {
                echo $post->post_title;
            }
            ?>
        </div>
        <!-- 本文 -->
        <div class="content">
            <?php echo mb_substr(strip_tags($post-> post_content), 0, 100).'...'; ?>
        </div>
    </div>
    <a href="<?php the_permalink() ?>" class="pa"></a>
</article><!-- #post-## -->