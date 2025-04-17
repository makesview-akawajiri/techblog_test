<?php ['title' => $title, 'en_title' => $en_title] = $args; ?>

<div class="common_page_main">
    <div class="wrap">
        <div class="title_box">
            <h1 class="title"><?= $title; ?></h1>
            <!-- <p class="sub_title"><?= $en_title; ?></p> -->
        </div>
    </div>
</div>
<div class="breadcrumb">
    <div class="wrap lr">
        <div vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
</div>