<?php get_header(); ?>
<?php the_under('お菓子教室'); ?>

<div class="wrapper">
        <main>
            <div class="row">
                <section class="lesson_box">
                    <p><img src="<?php echo get_theme_file_uri('common/img/lesson01.jpg'); ?>" alt="お子様と楽しい思い出を"></p>
                    <div>
                        <h2 class="title">お子様と楽しい思い出を</h2>
                        <p>材料や道具はCHALONでご用意いたします。難しいことは考えずに、お子様と一緒にケーキを作り楽しい思い出を作ってください。</p>
                    </div>
                </section>
            </div>
            <div class="row">
                <section class="lesson_box">
                    <p><img src="<?php echo get_theme_file_uri('common/img/lesson02.jpg'); ?>" alt="ご自宅でも楽しめる"></p>
                    <div>
                        <h2 class="title">ご自宅でも楽しめる</h2>
                        <p>一緒に作るケーキの材料は、近くのスーパーで買うことが出来るものを使っているので、ご自宅でも作っていただけます。</p>
                    </div>
                </section>
            </div>
            <div class="row">
                <section class="lesson_box">
                    <p><img src="<?php echo get_theme_file_uri('common/img/lesson03.jpg'); ?>" alt="食を通じた学び"></p>
                    <div>
                        <h2 class="title">食を通じた学び</h2>
                        <p>楽しむだけではなく、一緒にケーキを作ることで、様々な学びを得られるよう、レシピ・カリキュラムを作っています。</p>
                    </div>
                </section>
            </div>
            <div class="row">
                <section class="gaiyou">
                    <h2 class="title">教室概要</h2>
                    <table>
                        <tr>
                            <th>教室概要</th>
                            <td>お菓子作り</td>
                        </tr>
                        <tr>
                            <th>開催日時</th>
                            <td>毎週水曜日の16時〜18時</td>
                        </tr>
                        <tr>
                            <th>定員</th>
                            <td>３組（お子様３名までとご両親）</td>
                        </tr>
                        <tr>
                            <th>料金</th>
                            <td>１組6,000円</td>
                        </tr>
                    </table>
                    <p class="btn"><a href="<?php page_link('lesson/contact'); ?>">お菓子教室にお申し込み</a></p>
                </section>
            </div>
            <div class="row">
                <section class="cal">
                    <h2 class="title">2020年8月の開講日</h2>
                    <div class="cal_area"></div>
                </section>
            </div>
        </main>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>