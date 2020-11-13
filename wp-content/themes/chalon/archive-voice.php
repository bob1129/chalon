<?php get_header(); ?>
<?php the_under('参加者の声'); ?>
<div class="wrapper">
    <main>
      <div class="row">
      <p>
          CHALONのお菓子教室にご参加いただいた方のアンケートです。
      </p>
      <div class="voice_wrap">

      <?php if(have_posts()):while(have_posts()):the_post(); ?>

      <a href="<?php the_permalink(); ?>">
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
      </a>

      <?php endwhile; endif; ?>
      
      </div>
      <?php
        if(function_exists('wp_pagenavi')){
          wp_pagenavi();
        }
      ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>