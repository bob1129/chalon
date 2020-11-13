<?php get_header(); ?> 
 <main>
        <div id="top_about" class="row">
            <section class="inner">
                <h2 class="title">CHALONについて</h2>
                <p class="lead">オープンして１０年、振りかえれば長い道のりでした。 それは、お客さまのよろこぶ顔を思い浮かべながら進んできた一歩一歩の積みかさね。
                    変わらない、味とこだわり。進化しつづける、お客様へのサービス。 どちらも大切にしてきました。 これからもCHALONは、お客様の心に懐かしく残る様な、そんな洋菓子店であり続けます。</p>
                <p class="btn"><a href="<?php page_link('about'); ?>">CHALONについてもっと見る</a></p>
            </section>
        </div>
        <div id="top_menu" class="row">
            <section class="inner">
                <h2 class="title">メニュー</h2>
                <div>
                    <?php
                        $menu_query = new WP_Query([
                            'post_type' => 'menu',
                            'posts_per_page' => 4
                        ]);
                    ?>
                    <?php if($menu_query->have_posts()):while($menu_query->have_posts()):$menu_query->the_post(); ?>
                    <figure>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <figcaption><?php the_title(); ?></figcaption>
                        </a>
                    </figure>
                    <?php endwhile; endif; ?>
                </div>
                <p class="btn"><a href="<?php echo get_post_type_archive_link('menu'); ?>">メニュー一覧へ</a></p>
            </section>
        </div>
        <div id="top_lesson" class="row">
            <section class="inner">
                <h2 class="title">お菓子教室について</h2>
                <figure>
                    <p><img src="<?php echo get_theme_file_uri('common/img/about04.jpg'); ?>" alt=""></p>
                    <figcaption>
                        <p>
                            CHALONでは、毎月第１・第２土曜日に、ご家族で参加できるお菓子教室を開催しています。<br>
                            当店の職人が、一から丁寧にレクチャーしますので、小さいお子さんでも安心して参加していただけます。<br>
                            家族の楽しい思い出作りに、是非御参加ください。
                        </p>
                    </figcaption>
                </figure>
                <p class="btn"><a href="<?php page_link('lesson') ?>">お菓子教室について</a></p>
            </section>
        </div>
        <div class="bottom_contents row">
            <div class="inner">
                <section id="top_voice">
                    <h2 class="title">お菓子教室参加者の声</h2>
                    <?php
                        $voice_query = new WP_Query([
                            'post_type' => 'voice',
                            'posts_per_page' => 1
                        ]);
                    ?>
                    <?php if($voice_query->have_posts()):while($voice_query->have_posts()):$voice_query->the_post(); ?>
                    <figure>
                        <p>
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="https://placehold.jp/3d4070/ffffff/500x500.png?text=no%20image" alt="">
                        <?php endif; ?>
                        </p>
                        <figcaption>
                            <p><?php echo SCF::get('sanka'); ?>参加</p>
                            <p><?php the_title(); ?></p>
                            <p><?php the_content(); ?></p>
                        </figcaption>
                    </figure>
                    <?php endwhile; endif; ?>
                    <p class="btn"><a href="<?php echo get_post_type_archive_link('voice'); ?>">参加者の声をもっと見る</a></p>
                </section>
                <section class="inner" id="top_info">
                    <h2 class="title">CHALONからのおしらせ</h2>
                    <?php
                        $news_query = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => 4
                        ]);
                    ?>
                    <?php if($news_query->have_posts()):while($news_query->have_posts()):$news_query->the_post(); ?>
                    <dl>
                        <dt><?php echo get_the_date(); ?></dt>
                        <dd>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </dd>
                    </dl>
                    <?php endwhile; endif; ?>
                    <p class="btn"><a href="<?php page_link('news'); ?>">お知らせ一覧</a></p>
                </section>
            </div>
        </div>
    </main>
<?php get_footer(); ?>