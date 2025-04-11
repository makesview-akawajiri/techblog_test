<?php
/*
Template Name: お問い合わせ（サンクスページ）
*/

get_header();

?>

<script type="text/javascript">
    // ステップバー
    $(document).ready(function() {
        if ($('.mw_wp_form').hasClass('mw_wp_form_input')) {
            $('#step_1').addClass('active')
        } else if ($('.mw_wp_form').hasClass('mw_wp_form_preview')) {
            $('#step_2').addClass('active')
        } else if ($('.mw_wp_form').hasClass('mw_wp_form_complete')) {
            $('#step_3').addClass('active')
        }
    });
</script>

<?php
get_template_part('inc/common_fv', null, array(
    'title' => get_the_title(),
    'en_title' => 'Thanks'
));
?>

<main id="main" class="page_main">
    <div class="page_contact">
        <div class="common_page_wrap">
            <div class="wrap">

                <div class="progressbar">
                    <div id="step_1" class="item"><span class="mark"></span><span class="en">Step 01</span>ご入力</div>
                    <div id="step_2" class="item"><span class="mark"></span><span class="en">Step 02</span>ご確認</div>
                    <div id="step_3" class="item"><span class="mark"></span><span class="en">Step 03</span>完了</div>
                </div>

                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content/content', 'page');
                endwhile;
                ?>

            </div>
        </div>
    </div>
</main>

<?php
get_footer();
