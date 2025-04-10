<?php
/*
Template Name: お問い合わせ
*/

get_header();

$page = get_post(get_the_ID());
$slug = $page->post_name;
$slug = str_replace('_', ' ', $slug);
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
    'en_title' => $slug
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

                <div class="contact_form_disc">
                    <p class="text">
                        以下のフォームより、<br class="sp">お気軽にお問い合わせください。<br>
                        お問い合わせいただいた内容は確認後、<br class="sp">3営業日以内に担当者より<br class="sp">ご連絡させていただきます。
                    </p>
                    <p class="caution">
                        ※記入いただいた個人情報は、ご本人の同意なく<br class="sp">第三者に提供することはございません。<br>
                        ※詳細は「個人情報の保護に関する事項」を<br class="sp">ご確認ください。
                    </p>
                </div>

                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content/content', 'page');
                endwhile;
                ?>

                <div class="privacy_term_outer">
                    <?php get_template_part('inc/privacy_term'); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    $(function() {
        $('.select').on('change', function() {
            if ($(this).val() !== "") {
                $(this).removeClass('empty');
            } else {
                $(this).addClass('empty');
            }
        });
    });
</script>

<?php
get_footer();
