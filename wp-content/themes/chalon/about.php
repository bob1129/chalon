<?php
/*
Template Name:当店についてのテンプレート
*/
?>
<?php get_header(); ?>
<?php the_under('当店について'); ?>
    <main>
        <div class="row">
            <section class="inner" id="about_commitment">
                <h2 class="title">CHALONのこだわり</h2>
                <section>
                    <h3>安心な国産の材料を使用</h3>
                    <div>
                        <p class="about_text">
                            お客様に安心してケーキを楽しんでいただくために、CHALONでは、質が良く安全な、国産の卵や牛乳、生クリームを使っています。
                            さらに、小麦粉に関しては、数ある小麦粉の中から選び抜いた、香りの良い北海道産の「ファリーヌ」にこだわっています。<br>
                        </p>
                        <p class="about_image">
                            <img src="<?php echo get_theme_file_uri('common/img/about01.jpg'); ?>" alt="">
                        </p>
                    </div>
                </section>

                <section>
                    <h3>新しいメニューの開発</h3>
                    <div>
                        <p class="about_text">
                            CHALONの職人たちは、定番のケーキをおいしく仕上げる職人でありながら、常に新しいケーキを生み出し続けるクリエイターでもあります。<br>
                            お客様に楽しんでいただくために、毎月新しいメニューを開発しています。
                        </p>
                        <p class="about_image">
                            <img src="<?php echo get_theme_file_uri('common/img/about02.jpg'); ?>" alt="">
                        </p>
                    </div>
                </section>

                <section>
                    <h3>アレルギーへの対策</h3>
                    <div>
                        <p class="about_text">
                            CHALONのケーキは、全てケースの前にアレルゲン物質を書き出していますので、アレルギーをお持ちの方でも安心してお買い求めいただけます。<br>
                            また、小麦アレルギーの方のために、米粉を使ったケーキも販売しております。
                        </p>
                        <p class="about_image">
                            <img src="<?php echo get_theme_file_uri('common/img/about03.jpg'); ?>" alt="">
                        </p>
                    </div>
                </section>

                <section>
                    <h3>ケーキ作りをご自宅で</h3>
                    <div>
                        <p class="about_text">
                            CHALONでは、お菓子作りの楽しさをお伝えするために第１・第２土曜日に、家族で参加できるお菓子作り教室を開催しています。<br>
                            お子様との楽しい思い出作りに、是非ご参加ください。
                        </p>
                        <p class="about_image">
                            <img src="<?php echo get_theme_file_uri('common/img/about04.jpg'); ?>" alt="">
                        </p>
                    </div>
                </section>
            </section>
        </div>
    </main>

<?php get_footer(); ?>