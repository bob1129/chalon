<footer>
        <div class="inner">
            <p class="footer_logo"><img src="<?php echo get_theme_file_uri('common/img/logo_white.png'); ?>" alt="フッターロゴ"></p>
            <div class="footer_wrap">
                <div class="footer_left">
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
                </div>
                <div class="footer_right">
                    <ul>
                        <li><a href="#"><img src="<?php echo get_theme_file_uri('common/img/icon_fb.png'); ?>" alt="facebook"></a></li>
                        <li><a href="#"><img src="<?php echo get_theme_file_uri('common/img/icon_tw.png'); ?>" alt="twitter"></a></li>
                        <li><a href="#"><img src="<?php echo get_theme_file_uri('common/img/icon_insta.png'); ?>" alt="instagram"></a></li>
                    </ul>
                    <dl>
                        <dt>Address</dt>
                        <dd>
                            <address>
                                〒160-0005<br>
                                東京都新宿区愛住町22<br>
                                第3山田ビル1F
                            </address>
                        </dd>
                    </dl>
                </div>
            </div>
            <p class="copy"><span>&copy; CHALON</span></p>
        </div>
    </footer>
    <p class="to_top"><i class="fas fa-angle-up"></i></p>
    <?php wp_footer(); ?>
</body>

</html>