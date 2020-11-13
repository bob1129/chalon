<?php get_header(); ?>
<?php the_under('メニュー'); ?>

<main>
    <div class="row">
      <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <section class="inner">

            <div class="cake_wrap">
                <h2 class="title">
                  <?php the_title(); ?>
                </h2>
                <div>
                  <?php the_content(); ?>
                </div>
                
                <dl>
                    <dt>価格</dt>
                    <dd>
                      <?php echo SCF::get('price'); ?>円（税込）
                    </dd>
                </dl>
                <dl>
                    <dt>カロリー</dt>
                    <dd>
                      <?php echo SCF::get('cal'); ?>kcal
                    </dd>
                </dl>

            </div>
            <p class="cake_img">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="https://placehold.jp/3d4070/ffffff/500x500.png?text=no%20image" alt="">
              <?php endif; ?>
            </p>

        </section>
      <?php endwhile; endif; ?>
        <p class="btn"><a href="<?php echo get_post_type_archive_link('menu') ?>">メニュー一覧へ</a></p>
    </div>
</main>

<?php get_footer(); ?>