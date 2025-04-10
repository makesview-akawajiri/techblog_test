<?php get_header(); ?>

<main id="main" class="site-main">
    <!--投稿吐き出し用記述 START-->

    <ul><!--繰り返しを囲む要素-->
        <?php query_posts('showposts=3&cat=1'); ?><!--繰り返し回数とカテゴリーidを指定-->
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                $cat = get_the_category();
                $catslug = $cat[0]->slug;
                $days = 7; //Newを表示させたい期間の日数
                $today = date_i18n('U');
                $entry = get_the_time('U');
                $kiji = date('U', ($today - $entry)) / 86400;
        ?>
                <li>
                    <a href="<?php the_permalink() ?>"><!--リンクを表示させる-->
                        <?php
                        if ($days > $kiji) {
                            echo '<div class="new_mark">New</div>';
                        }
                        ?><!--Newを表示する記述-->
                        <div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>">
                            <?php else : ?>
                                <img src="<?= get_theme_path(); ?>/image/noimage.png" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="data">
                            <?php the_time('Y.m.d') ?>
                        </div><!--日付を表示させる-->
                        <div class="ttl">
                            <?php the_title(); ?>
                        </div><!--タイトルを表示させる-->
                        <div class="content">
                            <?php the_content(); ?>
                        </div><!--本文を表示させる-->
                    </a>
                </li>

                <!--繰り返される記述 END-->

            <?php endwhile; ?>

        <?php else : ?><!--投稿記事が無い場合-->
            <li>記事が見つかりませんでした</li>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </ul>

    <!--投稿吐き出し用記述 END-->



    <!--カスタム投稿吐き出し用記述 START-->

    <?php
    $args = array(
        'post_type' => '投稿タイプスラッグ',
        'taxonomy' => 'タクソノミースラッグ',
        'term' => 'タームスラッグ',
        'posts_per_page' => 0,
    );
    $my_query = new WP_Query($args);
    ?>

    <ul>
        <?php
        while ($my_query->have_posts()) :
            $my_query->the_post();
        ?>

            <!--繰り返される記述 START-->

            <li>
                <?php
                if ($terms = get_the_terms($post->ID, 'タクソノミー名')) {
                    foreach ($terms as $term) {
                        $term_slug = $term->slug;
                        echo ('<span class="');
                        echo esc_html($term_slug);
                        echo ('">');
                        echo esc_html($term->name);
                        echo ('</span>');
                    }
                }
                ?><!--スラッグがclassについたターム名を表示-->

                <p class="title"><?php the_title(); ?></p>

                <!--カスタムフィールドを表示する記述 START-->

                <?php $fieldmei = get_field('フィールド名'); ?>
                <?php if (!empty($fieldmei)) : ?>
                    <!--入力済の場合-->
                    <p><?php the_field('フィールド名'); ?>"></p>
                <?php else : ?>
                    <!--未入力の場合-->
                <?php endif; ?>

                <!--カスタムフィールドを表示する記述 END-->

                <a href="<?php the_permalink() ?>"></a>
            </li>

            <!--繰り返される記述 END-->

        <?php endwhile; ?>
        <?php wp_reset_query(); ?><!--phpの条件指定をリセットする記述-->

    </ul>

</main>

<?php
get_footer();
