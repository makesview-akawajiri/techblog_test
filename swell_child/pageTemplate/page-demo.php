<?php
/*
Template Name: 準備中
*/
get_header();

$page = get_post(get_the_ID());
$slug = $page->post_name;
$slug = str_replace('_', ' ', $slug);
?>

<?php
get_template_part('inc/common_fv', null, array(
    'title' => get_the_title(),
    'en_title' => $slug
));
?>

<main id="main" class="page_main">
    <div class="common_page_wrap">
        <p class="reserve_text">Coming Soon...</p>
    </div>
</main>

<?php
get_footer();
