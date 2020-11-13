<?php get_header(); ?> 
<?php the_under('参加者の声'); ?>
<div class="wrapper">
  <main>
      <div class="row">
      <?php if(have_posts()):while(have_posts()):the_post(); ?>
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
          <dl>
              <dt><span>Q</span>ご参加いただいたお子さんの年齢を教えてください</dt>
              <dd><span>A</span><?php echo SCF::get('qa1'); ?>。</dd>
          </dl>
          <dl>
              <dt><span>Q</span>お菓子教室の受講時間はいかがでしたか</dt>
              <dd><span>A</span><?php echo SCF::get('qa2'); ?></dd>
          </dl>
          <dl>
              <dt><span>Q</span>お菓子教室の難易度はいかがでしたか</dt>
              <dd><span>A</span><?php echo SCF::get('qa3'); ?></dd>
          </dl>
          <?php endwhile; endif; ?>
          <p class="btn"><a href="<?php echo get_post_type_archive_link('voice') ?>">参加者の声をもっと見る</a></p>
      </div>
  </main>
  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>