<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>東京都新宿区の美味しい洋菓子とお菓子教室のお店CHALON</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="inner">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_file_uri('common/img/logo.png'); ?>" alt="ロゴ"></a></h1>
            <nav class="pc_nav">
                <ul>
                    <li><a href="<?php page_link('about'); ?>">当店について</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('menu'); ?>">メニュー</a></li>
                    <li><a href="<?php page_link('lesson'); ?>">お菓子教室</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="sp_nav">

        <div class="menu_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>

            <div>
                <ul>
                    <li><a href="<?php page_link('about'); ?>">当店について</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('menu'); ?>">メニュー</a></li>
                    <li>
                        <a href="<?php page_link('lesson'); ?>">お菓子教室</a>
                        <ul>
                            <li><a href="<?php page_link('lesson/flow'); ?>">ご参加の流れ</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('voice'); ?>">参加者の声</a></li>
                            <li><a href="<?php page_link('lesson/contact'); ?>">お申し込み</a></li>
                        </ul>
                    </li>
                </ul>
                <p><a href="https://ameblo.jp/ebizo-ichikawa/"><img src="<?php echo get_theme_file_uri('common/img/bnr.jpg'); ?>" alt=""></a></p>
            </div>
        </nav>
    </div>

    <?php if(is_front_page()): ?>
    <div id="key">
        <div class="inner">
            <p class="sp"><img src="<?php echo get_theme_file_uri('common/img/logo_white.png'); ?>" alt="logo"></p>
            <div class="pc">
                <p>
                    美味しいケーキを<br>
                    一人でも多くのお客様に<br>
                    召し上がっていただきたい<br>
                    <span>それがCHALONの想いです</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="scroll" class="row">
        <div>
            <p><i class="material-icons">expand_more</i></p>
            <p>scroll</p>
        </div>

    </div>
    <?php endif; ?>