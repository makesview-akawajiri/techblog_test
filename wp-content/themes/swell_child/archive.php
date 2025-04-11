<?php
if (!defined('ABSPATH')) exit;

get_header();

$term = get_queried_object();
$term_slug = $term->slug;
$cat_ttl = get_the_archive_title();

if (SWELL_Theme::is_term()) :
    SWELL_Theme::get_parts('archive-term');
else :
    $archive_data     = SWELL_Theme::get_archive_data();
    $archive_title    = $archive_data['title'];
    $archive_subtitle = str_replace('pt_archive', 'archive', $archive_data['type']);

    // リストタイプ
    $list_type = apply_filters('swell_post_list_type_on_archive', SWELL_Theme::$list_type, $archive_data);
?>

    <?php
    get_template_part('inc/common_fv', null, array(
        'title' => $cat_ttl,
        'en_title' => $term_slug,
    ));
    ?>

    <div id="content" class="l-content l-container">
        <main id="main_content" class="l-mainContent l-article">
            <div class="l-mainContent__inner">
                <div class="p-archiveContent u-mt-40">
                    <?php
                    // 新着投稿一覧 ( Main loop )
                    SWELL_Theme::get_parts('parts/post_list/loop_main', ['type' => $list_type]);
                    SWELL_Theme::get_parts('parts/post_list/item/pagination');
                    ?>
                </div>
            </div>
        </main>
        <?php
        if (SWELL_Theme::is_show_sidebar()) {
            get_sidebar();
        }
        ?>
    </div>
<?php endif;
get_footer(); ?>