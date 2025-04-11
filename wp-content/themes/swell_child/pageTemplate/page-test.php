<?php
/*
Template Name: test
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
    <div class="page_privacy">
        <div class="common_page_wrap">
            <div class="wrap">
                <?php get_template_part('inc/privacy_term'); ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
