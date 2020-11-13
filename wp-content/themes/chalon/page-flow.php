<?php get_header(); ?>
<?php the_under('ご参加の流れ'); ?>
<div class="wrapper">
        <main>
            <div class="row">
                <dl class="inner">
                    <dt class="title">1.お申込み</dt>
                    <dd>
                        <figure>
                            <p><img src="<?php echo get_theme_file_uri('common/img/flow01.jpg'); ?>" alt=""></p>
                            <figcaption>
                                ホームページのお申込みフォームよりお申込みください。
                                <p class="btn"><a href="../contact/">お菓子教室にお申し込み</a></p>
                            </figcaption>
                        </figure>
                    </dd>
                </dl>
            </div>

            <div class="row">
                <dl class="inner">
                    <dt class="title">2.お支払い</dt>
                    <dd>
                        <figure>
                            <p><img src="<?php echo get_theme_file_uri('common/img/flow02.jpg'); ?>" alt=""></p>
                            <figcaption>
                                お支払い方法は、クレジットカードのみとなります。
                            </figcaption>
                        </figure>
                    </dd>
                </dl>
            </div>

            <div class="row">
                <dl class="inner">
                    <dt class="title">3.お支払いの確認</dt>
                    <dd>
                        <figure>
                            <p><img src="<?php echo get_theme_file_uri('common/img/flow03.jpg'); ?>" alt=""></p>
                            <figcaption>
                                お支払いの確認が出来たらその旨のご連絡をメールでいたします。こちらのメールをもって、受付完了となります。
                            </figcaption>
                        </figure>
                    </dd>
                </dl>
            </div>

            <div class="row">
                <dl class="inner">
                    <dt class="title">4.当日</dt>
                    <dd>
                        <figure>
                            <p><img src="<?php echo get_theme_file_uri('common/img/flow04.jpg'); ?>" alt=""></p>
                            <figcaption>
                                材料や、道具などは全てこちらで用意いたします。エブロンなどを使われる場合は、お持ちください。
                            </figcaption>
                        </figure>
                    </dd>
                </dl>
            </div>
            <p class="btn"><a href="<?php page_link('lesson/contact'); ?>">お菓子教室にお申し込み</a></p>
        </main>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>