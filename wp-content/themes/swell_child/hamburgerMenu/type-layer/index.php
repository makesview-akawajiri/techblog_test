<script src="<?= get_theme_path(); ?>/hamburgerMenu/type-layer/menu.js"></script>
<link rel="stylesheet" type="text/css" href="<?= get_theme_path(); ?>/hamburgerMenu/type-layer/menu.css">

<!-- ハンバーガーボタン -->
<div class="hamburger js-hg-btn">
    <span></span>
    <span></span>
    <span></span>
</div>

<!-- SPメインメニュー -->
<nav class="globalMenuSp_main_menu_box js-sp-main-menu">
    <div class="inner">
        <ul>
            <li>
                <a href="#">Menu1</a>
            </li>
            <li>
                <a href="#">Menu2</a>
            </li>
            <li>
                <a href="#">Menu3</a>
            </li>
            <li>
                <a class="js-sp_sub_menu_btn" data-sub-menu-name="menu4">Menu4</a>
            </li>
            <li>
                <a class="js-sp_sub_menu_btn" data-sub-menu-name="menu5">Menu5</a>
            </li>
        </ul>
    </div>
</nav>

<!-- SPサブメニュー -->
<div class="globalMenuSp_sub_menu_box">
    <nav class="js-sp_sub_menu sp_sub_menu menu4">
        <div class="inner">
            <p class="ttl">Menu4</p>
            <ul>
                <li>
                    <a href="#">SubMenu1</a>
                </li>
                <li>
                    <a href="#">SubMenu2</a>
                </li>
                <li>
                    <a href="#">SubMenu3</a>
                </li>
                <li>
                    <a href="#">SubMenu4</a>
                </li>
                <li>
                    <a href="#">SubMenu5</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="js-sp_sub_menu sp_sub_menu menu5">
        <div class="inner">
            <p class="ttl">Menu5</p>
            <ul>
                <li>
                    <a href="#">SubMenu1</a>
                </li>
                <li>
                    <a href="#">SubMenu2</a>
                </li>
                <li>
                    <a href="#">SubMenu3</a>
                </li>
                <li>
                    <a href="#">SubMenu4</a>
                </li>
                <li>
                    <a href="#">SubMenu5</a>
                </li>
            </ul>
        </div>
    </nav>
</div>